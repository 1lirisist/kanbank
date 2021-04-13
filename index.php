<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"></head>
<?php $title="KanBank | Ana Sayfa"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>

        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <div class="card">
                    <img src="image/bg.png" class="card-img-top">
                </div>
            </div>

            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A+</div>
                    <div class="card-body">
                        A+ iseniz: A+ ve AB+'ya kan verebilirsiniz. A+, A-, O+ ve O-'den kan alabilirsiniz.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A-</div>
                    <div class="card-body">
                        Eğer A- iseniz: A-, A+, AB- ve AB+'ya kan verebilirsiniz. A- ve O-'den kan alabilirsiniz.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B+</div>
                    <div class="card-body">
                        A+ ve AB+'ya kan verebilirsiniz. A+, A-, O+ ve O-'den kan alabilirsiniz.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B-</div>
                    <div class="card-body">
                        B- iseniz: B-, B+, AB+ ve AB-'ye kan verebilir, B- ve O-'den kan alabilirsiniz, B+ ve AB+'ya kan verebilirsiniz.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB+</div>
                    <div class="card-body">
                        AB+ kanı olan kişiler, herhangi bir kan grubundan kırmızı kan hücresi alabilir. Bu, AB+ talebinin yalnızca AB ile bağışta bulunabileceği anlamına gelir.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB-</div>
                    <div class="card-body">
                        AB hastaları tüm negatif kan türlerinden kırmızı kan hücreleri alabilirler. AB- hem AB- hem de AB+ kan türlerine kırmızı kan hücreleri verebilir.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O+</div>
                    <div class="card-body">
                        0+ evrensel bağışçıdır diğer tüm gruplara kan verebilir ancak sadece 0 grubundan kan alabilir.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O-</div>
                    <div class="card-body">
                        O-, A+, A-, B+, B-, AB+, AB-, O+ ve O- kanlara bağış yapabilir O- kanı olan kişiler, sadece O- donörlerden alyuvar bağışı alabilir.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">İletişim</div>
                    <div class="card-body">
                        <i class="bi bi-telephone-fill"></i> <a >+90 312 584 18 68</a><br><br>
                        <i class="bi bi-geo-alt-fill"></i> </i> <a >Ataç-1 Sokak No: 32 Yenişehir 06420 ANKARA / TÜRKİYE</a><br><br>
                    </div>
                </div>
            </div>
            </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Sağlık İçin Birkaç İpucu</div>
                <div class="card-body">
                    <dt>Dengeli beslenin</dt>
                    <dd>Meyveler, sebzeler, baklagiller, kabuklu yemişler ve tam tahıllar dahil olmak üzere farklı yiyecekleri bir arada yiyin. Yetişkinler günde en az beş porsiyon (400 gr) meyve ve sebze yemelidir. Yemeğinize her zaman sebzeleri ekleyerek meyve ve sebze alımınızı artırabilirsiniz; atıştırmalık olarak taze meyve ve sebzeleri yemek; çeşitli meyve ve sebzeleri yemek; ve mevsiminde yemek. Sağlıklı beslenerek, yetersiz beslenme ve diyabet, kalp hastalığı, felç ve kanser gibi bulaşıcı olmayan hastalıklar (BOH) riskinizi azaltacaksınız.</dd>
                    <dt>Daha az tuz ve şeker tüketin</dt>
                    <dd>Öte yandan aşırı miktarda şeker tüketmek diş çürümesi ve sağlıksız kilo alma riskini artırır. Hem yetişkinlerde hem de çocuklarda, serbest şeker alımı toplam enerji alımının% 10'undan daha azına düşürülmelidir. Bu, bir yetişkin için 50 gr veya yaklaşık 12 çay kaşığı eşdeğerdir. DSÖ, ek sağlık yararları için toplam enerji alımının% 5'inden daha azının tüketilmesini önermektedir. Şekerli atıştırmalıklar, şekerler ve şekerli tatlandırılmış içeceklerin tüketimini sınırlayarak şeker alımınızı azaltabilirsiniz.</dd>
                    <dt>Hareket edin</dt>
                    <dd>Fiziksel aktivite, enerji harcamasını gerektiren iskelet kasları tarafından üretilen herhangi bir vücut hareketi olarak tanımlanır. Bu, çalışırken, oynarken, ev işlerini yaparken, seyahat ederken ve eğlence amaçlı faaliyetlerde bulunurken gerçekleştirilen egzersiz ve faaliyetleri içerir. İhtiyaç duyduğunuz fiziksel aktivite miktarı yaş grubunuza bağlıdır, ancak 18-64 yaş arası yetişkinler hafta boyunca en az 150 dakika orta yoğunlukta fiziksel aktivite yapmalıdır. Ek sağlık yararları için orta yoğunlukta fiziksel aktiviteyi haftada 300 dakikaya çıkarın.</dd>
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>

    <?php require 'footer.php'; ?>

</body>
</html>