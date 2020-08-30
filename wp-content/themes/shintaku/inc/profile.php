<?php require_once ($_SERVER['DOCUMENT_ROOT'].'/inc/common/functions.php');

$sns_en = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/en/inc/sns.php');
$sns = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/inc/sns.php');

/* branchURL('/en/', 'true', 'false'); /*This function from "/inc/common/functions.php"*/
?>

<article class="profile-unit">
    <section class="profile-unit__image" itemtype="http://schema.org/ImageObject">
        <a href="https://tomonishintaku.com<?php branchURL('/en/', '/en/about/', '/about/'); ?>" title="<?php branchURL('/en/', 'Tomoni Shintaku', '新宅 睦仁'); ?>" rel="nofollow"> <img alt="<?php branchURL('/en/', 'Tomoni Shintaku artist photo', '新宅 睦仁/シンタクトモニの作家画像'); ?>"
                src="/images/common/artist_photo.jpg"></a>
    </section>
    <section class="profile-unit__detail">
        <div class="profile-unit__name-sns-wrap">
        <strong class="profile-unit__name" itemprop="author" itemtype="http://schema.org/Person"><a
                href="https://tomonishintaku.com<?php branchURL('/en/', '/en/about/', '/about/'); ?>" class="url" rel="nofollow"><?php branchURL('/en/', 'Tomoni Shintaku', '新宅 睦仁<span class="en-name">SHINTAKU Tomoni</span>'); ?></a>
        </strong>
        <div class="profile-unit__sns-icons">
            <ul class="profile-unit__list">
            <?php branchURL('/en/', $sns_en, $sns); ?>
            </ul>
        </div>
        </div>        
        <p class="profile-unit__text" itemprop="description">
            <?php branchURL('/en/', 'Contemporary artist based in Los Angeles. I’ve learned at an Art College and Culinary Institute. I attempt to connect ART and FOOD.', '広島→福岡→東京→シンガポール→現在ロサンゼルス在住の現代美術家。美大と調理師専門学校に学んだ経験から食をテーマに作品を制作。無類の居酒屋好き。'); ?></p>
    </section>
</article>