<?php /* Template Name: Home Page Template */ get_header(); ?>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <a name="home"></a>
        <div class="banner" style="background:url(<?php echo get_field(" home_page_banner ");?>)"> </div>
        <div class="call_to_action">
            <a name="start"></a>
            <div id="call_to_action_image"> <img src="<?php echo get_template_directory_uri(); ?>../image/snow_beach_chill.png"> </div>
            <div id="call_to_action_button">
                <input type="submit" value="FIND FORHANDLER" id="calltoaction_button"> </div>
        </div>
        <div class="products_area">
            <div id="header1_body">
                <h1>

                <span class="first-half-text">
                   HVAD ER FORSKELLEN PÅ
                </span>

                SIDEBAR EYEWEAR™

            </h1> </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 products_area_image_align" style="background:url(<?php echo get_field(" product_area_1 ");?>">
                        <div class="products-content-area">
                            <h3>HÅRDFØR MATERIALE3R</h3>
                            <div class="product-area-square"></div>
                            <div class="product-area-content">
                                <?php echo get_field("product_area_content_1");?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 products_area_image_align" style="background:url(<?php echo get_field(" product_area_2 ");?>">
                        <div class="products-content-area">
                            <h3>POLARISEREDE LINSER</h3>
                            <div class="product-area-square"></div>
                            <div class="product-area-content">
                                <?php echo get_field("product_area_content_2");?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 products_area_image_align products_area_image_align" style="background:url(<?php echo get_field(" product_area_3 ");?>">
                        <div class="products-content-area">
                            <h3>SNAP BAR HÆNGSLER</h3>
                            <div class="product-area-square"></div>
                            <div class="product-area-content">
                                <?php echo get_field("product_area_content_3");?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a name="omsidebar"></a>
        <div class="feature_product">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 feature-product-image" style="background:url(<?php echo get_field("featured_image");?>"> </div>
                    <div class="col-md-6 feature-product-desc">
                        <div id="feature-product-content">
                            <h2>I SOLEN<br>I SNEEN<br>I VANDET</h2>
                            <div id="feature-product-square"></div>
                            <div id="feature-main-content"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in quam et enim ornare dictum et faucibus est. Suspendisse pharetra vitae lectus ut pellentesque. Fusce lacinia eget odio id scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery_area">
            <div class="container">
                <div id="header1_gallery">
                    <h1>
                <span class="first-half-text">
                   SE MERE FRA
                </span>

                SIDEBAR EYEWEAR™ DANMARK

            </h1>
                    <div class="row">
                        <div class="col-md-3 gallery-image" style="background:url(<?php echo get_template_directory_uri(); ?>../image/gallery/2.jpg)"> </div>
                        <div class="col-md-3 gallery-image" style="background:url(<?php echo get_template_directory_uri(); ?>../image/gallery/3.jpg)"> </div>
                        <div class="col-md-3 gallery-image" style="background:url(<?php echo get_template_directory_uri(); ?>../image/gallery/4.jpg)"> </div>
                        <div class="col-md-3 gallery-image" style="background:url(<?php echo get_template_directory_uri(); ?>../image/gallery/5.jpg)"> </div>
                    </div>
                </div>
            </div>
        </div>
        <a name="findforhandler"></a>
        <div class="contact_websites">
            <div class="container">
                <div id="header1_table">
                    <h1>
                <span class="first-half-text-table">
                   SIDEBAR EYEWEAR™
                </span>

                FORHANDLERE
            </h1>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>WEBSHOPS</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="site_name">SKATESH.OP</td>
                                            <td class="site_address">WWW.SKATESHOP.DK</td>
                                        </tr>
                                        <tr>
                                            <td class="site_name">SUR.F OG SKI</td>
                                            <td class="site_address">WWW.SURFOGSKI.DK</td>
                                        </tr>
                                        <tr>
                                            <td class="site_name">FASHION GALLERY</td>
                                            <td class="site_address">WWW.FASHIONGALLERY.DK</td>
                                        </tr>
                                        <tr>
                                            <td class="site_name">SOLBRILLESHOPPEN</td>
                                            <td class="site_address">WWW.SOLBRILLESHOPPEN.DK</td>
                                        </tr>
                                        <tr>
                                            <td class="site_name">SPECTACOLOUS</td>
                                            <td class="site_address">WWW.SPECTACOULOUS.DK</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3>BUTIKKER</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="site_name">SKATESH.OP</td>
                                            <td class="site_map_address">SANKT PEDERS VEJ 1, 2900 HELLERUP</td>
                                            <td class="site_number">+45 45 45 45 45</td>
                                            <td class="site_address">WWW.SKATESHOP.DK</td>
                                        </tr>
                                        <tr>
                                            <td class="site_name">SUR.F OG SKI</td>
                                            <td class="site_map_address">SANKT PEDERS VEJ 1, 2900 HELLERUP</td>
                                            <td class="site_number">+45 45 45 45 45</td>
                                            <td class="site_address">WWW.SURFOGSKI.DK</td>
                                        </tr>
                                        <tr>
                                            <td class="site_name">FASHION GALLERY</td>
                                            <td class="site_map_address">SANKT PEDERS VEJ 1, 2900 HELLERUP</td>
                                            <td class="site_number">+45 45 45 45 45</td>
                                            <td class="site_address">WWW.FASHIONGALLERY.DK</td>
                                        </tr>
                                        <tr>
                                            <td class="site_name">SOLBRILLESHOPPEN</td>
                                            <td class="site_map_address">SANKT PEDERS VEJ 1, 2900 HELLERUP</td>
                                            <td class="site_number">+45 45 45 45 45</td>
                                            <td class="site_address">WWW.SOLBRILLESHOPPEN.DK</td>
                                        </tr>
                                        <tr>
                                            <td class="site_name">SPECTACOLOUS</td>
                                            <td class="site_map_address">SANKT PEDERS VEJ 1, 2900 HELLERUP</td>
                                            <td class="site_number">+45 45 45 45 45</td>
                                            <td class="site_address">WWW.SPECTACOULOUS.DK</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a name="contact"></a>
        <div class="contactus_form">
            <div class="container">
                <div class="row">
                    <div id="contactus_textarea">
                        <h1><span class="text_red">KONTAKT</span> SIDEBAR EYEWEAR™ <span class="text_red">DANMARK</span></h1>
                        <div id="contactus_square"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in quam et enim ornare dictum et faucibus est. Suspendisse pharetra vitae lectus ut pellentesque.</p>
                    </div>
                    <form id="contactus_fieldarea">
                        <div id="name_field">
                            <label for="Name" class="name_area">Navn</label>
                            <input type="text" name="Name" id="name_textarea" /> </div>
                        <div id="email_field">
                            <label for="email" class="email_area">Email</label>
                            <input type="text" name="Email" id="email_textarea" /> </div>
                        <div id="message_field">
                            <label for="message" class="message_area">Besked</label>
                            <textarea rows="3" cols="20" name="message" form="contactus_fieldarea" id="message_textarea"> </textarea>
                        </div>
                        <input type="submit" value="INSEND" id="contactus_button">
                        <div class="vn-clear"></div>
                    </form>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
            <?php endif; ?>
                <?php get_footer(); ?>
