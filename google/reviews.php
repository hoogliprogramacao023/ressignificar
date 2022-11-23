<!--== Start Testimonial Area ==-->
<section class="testimonial-area testimonial-digital-marketer-area">
    <div class="container">
        <div class="row margem-avaliacao">
            <div class="col-lg-12 text-center">
                <div class="section-title" id="tituloReviewsGoogle">
                    <img loading="lazy" src="google/google-logo.svg" width="150px" height="120px">
                    <h2 class="title">Avaliações no Google Meu Negócio</h2>
                </div>
            </div>
        </div>
        <div class="row" id="google-reviews"></div>
        
        </div>
    </div>
</section>
<!--== End Testimonial Area ==-->

<!--== Google Reviews ==-->
<link href="<?php echo SITE_URL;?>/google/google-maps-reviews.css?>" rel="stylesheet" />
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAnhfxUppKAbOcwMsjKwWwmWnQEJ5bIGxI"></script>
<script src="<?php echo SITE_URL;?>/google/google-maps-reviews.js"></script>
<script>
    googlePlaces("google-reviews", "tituloReviewsGoogle", {
        placeId: 'ChIJ6ZSAsVY7WpMRSHv-5oM6DPQ',
        // the following params are optional (default values)
        header: "", // html/text over Reviews
        footer: '', // html/text under Reviews block
        max_rows: 4, // max rows of reviews to be displayed
        min_rating: 4, // minimum rating of reviews to be displayed
        months: ["Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dez"],
        text_break_length: "230", // length before a review box is set to max width
        show_date: true, // renders the date of the review before the review itself
        shorten_names: false, // example: "Max Mustermann" -> "Max M.""
        replace_anonymous: false, // do not replace anonymous author_name from JSON
        anonymous_name: "A Google User", // Google's default value depending on language used (en: "A Google User")
        anonymous_name_replacement: "User chose to remain anonymous", // replacement for default (never shortens)
    });
</script>