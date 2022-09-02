<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        // $sentence = $this->faker->sentence();
        $sentence = "2022世界5G大会“5G与工业振兴论坛”在黑龙江省哈尔滨市举办";
        $excerpt = "　　近日，2022世界5G大会“5G与工业振兴论坛”在黑龙江省哈尔滨市召开。本次论坛以“5G赋能生产制造，助力国之重器腾飞”为主题。全国政协教科卫体委员会副主任、科技部原副部长曹健林及中国工程院院士周济共同担任本次论坛主席。";
        $body = "<p>　　近日，2022世界5G大会“5G与工业振兴论坛”在黑龙江省哈尔滨市召开。本次论坛以“5G赋能生产制造，助力国之重器腾飞”为主题。全国政协教科卫体委员会副主任、科技部原副部长曹健林及中国工程院院士周济共同担任本次论坛主席。</p>
        <p>　　曹健林在致辞中表示，近年来，5G在我国工业领域得到广泛应用，自动驾驶、智慧城市、智能大数据应用等都与5G技术发展有着重要联系。未来，随着我国工业进一步转型升级，5G将会在工业领域得到更加广泛的应用。他同时提道，5G技术发展依赖诸多关键设备，这些设备制造本身也是非常重要的工业领域，其所需要的核心技术对5G发展同样至关重要。黑龙江省政协副主席聂云凌在致辞中表示，随着5G技术日益成熟，5G在工业互联网发展中充当着越来越重要的角色，并且在智能制造领域的应用呈现出规模化突破态势。黑龙江省作为我国重要的老工业基地，在诸多工业领域具有一定的产业基础和优势，能够为5G技术提供丰富的应用场景。</p>
        <p>　　周济认为，智能制造是第四次工业革命的核心技术，而“5G+”工业互联网是智能制造的关键支撑，能够助力智能制造向更深层次发展，同时智能制造也为“5G+”工业互联网开辟了广阔市场。“‘5G+’工业互联网产生的大数据，能够为智能制造赋能。未来在‘5G+’工业互联网的支持下，制造装备、产线、车间、工厂都将发生革命性的变革。”周济表示，目前“5G+”工业互联网推动下的智能制造已经在部分行业中大展身手。</p>
        <p>　　瑞士机械和电气工程行业协会主席马丁·希策尔也认同周济的观点，他认为5G引领下的智能制造将是未来工业发展中非常关键的概念，5G带来的互联互通能够为智能制造提升效率、降低成本。但他也表示，数字化和5G不是最终目的，它们最终要为提高生产力服务。因此在5G应用时，要针对各行各业的不同情况进行有针对性的调整。他还格外强调，在这一过程中要始终保持创新和开放的技术心态。</p>
        <p>　　中讯邮电咨询设计院有限公司总经理薛吉平分享了他对“5G+”工业互联网的理解与看法。薛吉平认为，无论在国家层面还是地方政府，“5G+”工业互联网都得到了大力支持。在这一背景下，工业互联网市场规模不断壮大，企业参与积极性不断提高。工业互联网最根本的目标是创造价值，为此，他认为工业互联网一般包括六种模式：数字化研发、智能化生产、网络化协同、个性化定制、服务化延伸、精细化管理。</p>
        <p>　　中国一重集团董事长刘明忠指出，5G作为国家战略，日益成为推动经济社会数字化、网络化、智能化转型升级的关键驱动，有力支撑了制造强国建设，对于赢得科技竞争、现代工业智能化的控制权、全球产业链重新整合的话语权和提升大国综合实力具有重大现实意义。中国一重已将“5G+工业互联网”作为打造“中国制造业第一重地”、加速传统制造业高质量发展、培育壮大新动能，加快产业链、价值链向中高端延伸，抢占未来制造业竞争制高点的重要路径。</p>
        <p>　　武汉华中数控股份有限公司董事长陈吉红结合数控机床这一“工业母机”在5G技术支撑下的智能化升级表示，此前我国在数控机床领域长期落后于发达国家。但随着数字化、网络化、智能化技术的发展，我国智能化数控机床得以缩小与发达国家之间的技术差距。陈吉红表示，智能机床就是将大数据、云计算、人工智能、数字孪生等技术与控制系统紧密结合起来，能够实现设备加工更精、更快、更智能。因此，新一代信息技术和机床技术的深度融合，将是中国机床行业从跟跑到领跑的重大机遇。</p>
        <p>　　华为中国区5G创新部部长王法指出，我国5G商用三年来的变化，可以用四大纵深和四大转变来概括。其中四大纵深包括场景纵深、规模纵深、方案纵深和商业纵深。四大转变的第一个转变是从单一工厂的5G建设到集团多分厂的5G规模上线；在此基础上的第二个转变是5G应用从单一企业扩展到整个行业；第三个转变则是5G应用从头部企业向产业集群扩散；第四个转变是5G应用从国企、央企扩展到了民企、外企，说明5G建网已经从单纯的政策驱动转变为需求驱动，从成本驱动转变为价值创造，从网络连接升级为数智化转型。</p>
        <p>　　浪潮集团副总裁、浪潮通信技术有限公司董事长林巍表示，智能制造是推进制造强国战略的主攻方向，也是实现制造业创新发展的主要技术路线。他认为，推动智能制造产业数字化，关键是要利用新技术、新应用对传统制造业进行全方位、全链条改造，提高全要素生产率，发挥数字技术对经济发展的放大、叠加、倍增作用，不断增强产业链、供应链韧性和弹性，加快产业结构优化升级。</p>
        <p>　　高通公司技术标准副总裁李俨讲道，5G在中国落地商用已是第三年，在过去一段时间，大家都对5G寄予厚望，全球范围内都认为5G技术可以深刻改造传统的生活方式和生产方式。但是5G进入行业，在短时间内不会像4G时代消费领域那样出现爆款应用。因为与传统的基于手机的5G网络相比，行业应用5G有着完全不同的出发点和优化方向。李俨认为，5G行业应用是跨行业的融合，需要通讯人才和熟悉制造业的人才坐在一起，共同进行脑力激荡，不断优化才能实现更好发展。</p>
        <p>　　中兴通讯“5G+”工业互联网市场总监李溦认为，5G工业领域应用中需要解决的一个重要问题是要平衡好短期刚需和长期重构的关系。因此，中兴提出“用5G制造5G”，并将5G工业应用能力“原子化”，形成标杆复制，帮助行业客户数字化转型从能用、敢用到多用的转变。中国船舶集团有限公司第七〇三研究所信息网络事业部部长王海坤认为，数字化转型意味着生产力和生产关系的重塑，中国船舶七〇三研究所通过数据一体化驱动业务流程，通过智能化统计分析来辅助决策，实现了燃气轮机研发、生产、管理服务的数字化。</p>
        <p>　　论坛最后，奇安信工业互联网安全产品总监王弢从工业互联网安全角度指出，目前工业互联网发展中面临的安全问题主要来自两方面，一是外部威胁，二是内部挑战。他认为，目前工业互联网安全领域还存在三个问题：一是现有的工业安全产品缺乏工业属性；二是业务系统和安全设备缺乏协同；三是用户和安全企业缺乏深入合作。在这一基础上，王弢提出了工业互联网安全建设的三条标准：生产运行不中断、业务数据不出事、安全投入不设限。作为2022世界5G大会分论坛，本届论坛旨在为5G等信息技术赋能智能制造、助力传统产业升级搭建高规格、高水平的交流平台。</p>";

        return [
            'title' => $sentence,
            'thumb' => "/images/news-demo.jpg",
            'body' => $body,// $this->faker->text(),
            'excerpt' => $excerpt,
            'user_id' => $this->faker->randomElement([1]),
            'news_category_id' => $this->faker->randomElement([2, 3, 4, 5, 6]),
        ];
    }
}
