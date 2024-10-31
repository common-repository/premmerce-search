<?php if(!defined('WPINC')) die; ?>

<div style="display: none!important;" data-autocomplete-templates>

    <!-- Autocomplete list item template -->
    <div class="pc-autocomplete pc-autocomplete--item" data-autocomplete-template="item">
        <a href="#" class="item-link" data-autocomplete-product-link>
            <div class="pc-autocomplete__product">
                <?php  if( ($data['image']) ) : ?>
                <!-- Photo  -->
                <div class="pc-autocomplete__product-photo" style="display: none;" data-autocomplete-product-photo>
                    <img class="pc-autocomplete__img" alt="No photo" data-autocomplete-product-img>
                </div>
                <?php endif; ?>

                <div class="pc-autocomplete__product-info">
                    <!-- Title -->

                        <div class="pc-autocomplete__product-title" data-autocomplete-product-name></div>

                    <?php  if( ($data['price']) ) : ?>
                    <!-- Price -->
                    <div class="pc-autocomplete__product-price">
                        <div class="product-price product-price--sm product-price--bold" data-autocomplete-product-price></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </a>
        <?php  if( ($data['btn']) ) : ?>
        <!-- Add to cart button -->
        <div class="pc-autocomplete__product-btn">
            <a href="#" class="product-add-to-cart" data-autocomplete-product-add-to-cart>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512"><g><g><polygon points="408.5,63.9 387.7,63.9 387.7,95 356.6,95 356.6,115.8 387.7,115.8 387.7,147 408.5,147 408.5,115.8 439.7,115.8 439.7,95 408.5,95 "/><path d="M111,40.2c-1-5.2-5.2-8.3-10.4-8.3H16v20.9h76.2L161,331.1c1,5.2,5.2,8.3,10.4,8.3h268.2v-20.9H178.8L111,40.2z"/><rect width="237.9" x="171.5" y="371.7" height="20.9"/><path d="m396.9,419.7c-21.9,0-40.7,18.8-40.7,40.7s17.7,40.7 40.7,40.7c23,0 40.7-18.8 40.7-40.7s-18.8-40.7-40.7-40.7zm0,60.4c-10.4,0-19.8-9.4-19.8-19.8 0-10.4 8.3-19.8 19.8-19.8s19.8,9.4 19.8,19.8c0,10.5-9.4,19.8-19.8,19.8z"/><path d="m198.6,419.7c-21.9,0-40.7,18.8-40.7,40.7s17.7,40.7 40.7,40.7c21.9,0 40.7-18.8 40.7-40.7s-18.8-40.7-40.7-40.7zm0,60.4c-10.4,0-19.8-9.4-19.8-19.8 0-10.4 8.3-19.8 19.8-19.8 10.4,0 19.8,9.4 19.8,19.8 0,10.5-9.4,19.8-19.8,19.8z"/><path d="m496,104.8c0-52.1-41.7-93.8-93.9-93.8-52.2,0-93.9,41.7-93.9,93.8 0,0.7 0,1.4 0,2.1h-140.9c-10,0-11.7,9.1-10.4,13.6l44.9,158.5c1.1,4.3 6.3,7.3 10.4,7.3h227.5c5.2,0 9.4-3.1 11.5-8.3 0,0 41.8-148.9 42.5-151.9 0,0 0,0 0,0 1.5-6.9 2.3-14 2.3-21.3zm-315.1,23h130.1c2.9,11.8 8.1,22.8 15,32.3h-136.8l-8.3-32.3zm250.4,137.6h-211.8l-8.3-32.3h229.6l-9.5,32.3zm15.7-53.2h-242l-9-31.3h150.9c15.5,11.2 34.5,17.7 55.2,17.7 20,0 38.4-6.1 53.5-16.6l-8.6,30.2zm-44.9-34.4c-40.7,0-73-32.3-73-73 0-40.7 32.3-73 73-73 40.7,0 73,32.3 73,73 0,40.7-32.3,73-73,73z"/></g></g></svg>
            </a>
        </div>
        <?php endif; ?>
    </div>

    <!-- Autocomplete Show all result item template -->
    <div class="pc-autocomplete pc-autocomplete--item pc-autocomplete__message pc-autocomplete__message--show-all" data-autocomplete-template="allResult">
        <a href="#woocommerce-product-search-field" data-autocomplete-show-all-result>
            <?php esc_html_e('All search results', 'premmerce-search'); ?>
        </a>
    </div>

</div>