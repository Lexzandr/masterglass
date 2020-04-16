    <footer>

        <div class="container" >

            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <span class="footer__logo"><img src="<?= get_template_directory_uri();?>/img/logo.png" alt="logo"></span>



                </div>



                <div class="footer__adres col-md-4 col-sm-4 col-xs-12">

                    <div itemscope itemtype="http://schema.org/Organization">

                        <div class="copyright">&copy; 2015-<?= date('Y'); ?> <span itemprop="name">ГЛАСС МАСТЕР</span> - стекла и зеркала в интерьере</div>

                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                            Наш офис:

                            <span itemprop="addressLocality">г. Екатеринбург</span>,

                            <span itemprop="streetAddress">ул. Машинная 42 корпус 3</span>

                        </div>

                        Наш телефон:<span itemprop="telephone">+7(343) 361-07-37</span>

                        <br>

                        Email для ваших заявок: <span itemprop="email">glass-master66@mail.ru</span>
                    </div>
                </div>

                <div class="social col-md-4 col-sm-4 col-xs-12">
                    <a href="https://www.instagra­m.com/glass_master66/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://vk.com/id416164120" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                    <a href="www.facebook.com/glassmaster66" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://ru.pinterest.com/vereshaginv85/boards/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCs2jhFNl7YatRD8RPrZxOiw?view_as=subscriber" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </div>
            </div>



        </div>

        <div class="webmaster"><a href="http://web.ra-kolibri.com" title="Перейти на сайт разработчика">Разработка сайта - РА Колибри</a></div>

    </footer>



    <div id="zamer" class="modal fade" tabindex="-1" role="dialog">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title">Вызов замерщика</h4>

                </div>

                <div class="modal-body">

                    <?= do_shortcode('[contact-form-7 id="33" title="Вызов замерщика"]'); ?>

                </div>

            </div>

        </div>

    </div>

    <?php wp_footer(); ?>



<!-- Yandex.Metrika counter -->

<script type="text/javascript" >

    (function (d, w, c) {

        (w[c] = w[c] || []).push(function() {

            try {

                w.yaCounter47844842 = new Ya.Metrika({

                    id:47844842,

                    clickmap:true,

                    trackLinks:true,

                    accurateTrackBounce:true,

                    webvisor:true

                });

            } catch(e) { }

        });



        var n = d.getElementsByTagName("script")[0],

            s = d.createElement("script"),

            f = function () { n.parentNode.insertBefore(s, n); };

        s.type = "text/javascript";

        s.async = true;

        s.src = "https://mc.yandex.ru/metrika/watch.js";



        if (w.opera == "[object Opera]") {

            d.addEventListener("DOMContentLoaded", f, false);

        } else { f(); }

    })(document, window, "yandex_metrika_callbacks");

</script>

<noscript><div><img src="https://mc.yandex.ru/watch/47844842" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- /Yandex.Metrika counter -->



</body>

</html>

