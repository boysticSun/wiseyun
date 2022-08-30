<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\NewsCategory;
use Illuminate\Support\Facades\Auth;
use App\Handlers\ImageUploadHandler;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$news = News::with('user', 'category')->paginate();
		return view('news.index', compact('news'));
	}

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

	public function create(News $news)
	{
		$categories = NewsCategory::all();
        return view('news.create_and_edit', compact('news', 'categories'));
	}

	public function store(NewsRequest $request, News $news)
	{
		$news->fill($request->all());
        $news->user_id = Auth::id();
        $news->save();

		return redirect()->route('news.show', $news->id)->with('success', '新闻资讯发布成功');
	}

	public function edit(News $news)
	{
        $this->authorize('update', $news);
		return view('news.create_and_edit', compact('news'));
	}

	public function update(NewsRequest $request, News $news)
	{
		$this->authorize('update', $news);
		$news->update($request->all());

		return redirect()->route('news.show', $news->id)->with('message', 'Updated successfully.');
	}

	public function destroy(News $news)
	{
		$this->authorize('destroy', $news);
		$news->delete();

		return redirect()->route('news.index')->with('message', 'Deleted successfully.');
	}

    // 上传图片
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'success'   => false,
            'msg'       => '上传失败!',
            'file_path' => ''
        ];
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到本地
            $result = $uploader->save($file, 'news', Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg']       = "上传成功!";
                $data['success']   = true;
            }
        }
        return $data;
    }
}
