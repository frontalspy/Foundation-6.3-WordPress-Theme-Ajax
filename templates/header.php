<?php if (!defined('ABSPATH') ) { exit;
} // Exit if accessed directly ?>

<header>
  <button class="hamburger hamburger--X" type="button" data-hide-for="medium" data-responsive-toggle="top-menu" aria-label="main-menu" aria-controls="navigation">
      <span class="hamburger-box">
          <span class="hamburger-inner"></span>
      </span>
    </button>
  <div class="top-bar" id="top-menu">
   <div class="top-bar-top row max-width">
     <div class="small-12 medium-7">
      <div class="video-bg anchor">
        <video class="full-width" autoplay muted loop>
          <source src="<?php echo get_template_directory_uri();?>/videos/test.mp4" type="video/mp4">
        </video>
        <style>svg.animation{visibility: hidden}</style>
        <a href="<?php echo home_url();?>">
          <svg class="animation" xmlns="http://www.w3.org/2000/svg" version="1.0" width="144px" height="auto" viewBox="0 0 503.000000 420.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,420.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M2625 4184 c-442 -68 -863 -354 -1109 -754 l-43 -69 19 -143 c10 -78 20 -144 22 -146 2 -2 67 39 144 90 100 66 147 104 166 133 14 22 57 76 95 119 206 234 454 381 736 437 107 21 408 18 515 -5 464 -101 856 -475 974 -930 66 -253 50 -552 -44 -793 -132 -342 -454 -648 -796 -756 -239 -76 -489 -83 -730 -22 -384 97 -704 383 -881 787 -25 59 -48 106 -50 104 -2 -2 -11 -66 -19 -142 -8 -76 -16 -140 -17 -141 -2 -1 -56 29 -121 68 -65 38 -121 67 -124 64 -3 -3 7 -38 23 -77 167 -431 540 -796 965 -946 338 -118 733 -122 1073 -10 319 105 621 337 824 635 204 298 297 660 265 1036 -35 417 -188 736 -494 1033 -239 231 -509 370 -825 424 -138 24 -427 26 -568 4z" /><path d="M1230 2951 c-194 -60 -292 -282 -201 -458 25 -49 94 -115 151 -144 67 -34 195 -38 271 -10 72 27 136 84 174 152 27 49 30 62 30 149 0 87 -3 100 -30 149 -62 111 -167 172 -298 170 -40 0 -83 -4 -97 -8z m171 -57 c78 -23 151 -98 174 -178 44 -152 -45 -302 -199 -337 -144 -32 -289 78 -303 230 -10 111 34 205 122 257 78 45 125 52 206 28z" /><path d="M470 2640 l0 -310 40 0 40 0 0 150 c0 114 3 150 13 150 6 -1 61 -68 121 -150 l110 -150 43 0 c52 0 59 -15 -73 161 l-103 136 55 6 c63 7 118 37 139 77 22 42 19 128 -5 168 -35 57 -84 72 -242 72 l-138 0 0 -310z m288 233 c40 -30 51 -85 27 -132 -25 -45 -64 -60 -162 -60 l-73 -1 0 111 0 111 90 -4 c70 -3 96 -9 118 -25z" /><path d="M1730 2925 c0 -24 2 -25 70 -25 l70 0 0 -285 0 -285 35 0 35 0 0 285 0 285 70 0 c68 0 70 1 70 25 l0 25 -175 0 -175 0 0 -25z" /><path d="M2371 2848 c-26 -57 -92 -194 -145 -306 -53 -111 -96 -204 -96 -207 0 -3 17 -5 39 -5 l38 0 49 105 48 105 128 0 128 0 50 -105 49 -105 40 0 40 0 -58 123 c-32 67 -97 206 -146 310 -51 109 -94 187 -102 187 -7 0 -35 -46 -62 -102z m157 -254 c-3 -2 -48 -3 -100 -2 l-95 3 50 105 49 105 51 -103 c27 -56 48 -105 45 -108z" /><path d="M2840 2641 l0 -311 35 0 35 0 0 149 0 149 108 3 c85 3 114 8 142 25 104 61 108 193 7 268 -25 19 -45 21 -178 24 l-149 4 0 -311z m239 253 c67 -14 105 -86 77 -146 -24 -50 -50 -61 -153 -66 l-93 -4 0 111 0 111 69 0 c38 0 82 -3 100 -6z" /><path d="M3360 2640 l0 -310 35 0 35 0 0 310 0 310 -35 0 -35 0 0 -310z" /><path d="M3560 2929 c7 -11 42 -69 80 -129 38 -60 74 -118 80 -130 10 -19 0 -39 -84 -175 -53 -84 -96 -156 -96 -159 0 -3 18 -6 39 -6 l39 0 78 125 c42 69 78 125 79 125 1 0 37 -56 79 -125 l78 -125 39 0 c21 0 39 3 39 6 0 3 -43 75 -96 160 l-96 154 88 142 c49 78 91 146 93 150 1 5 -16 8 -40 6 -42 -3 -42 -3 -110 -111 -37 -60 -69 -110 -71 -113 -2 -2 -35 48 -74 111 l-69 114 -43 1 c-40 0 -42 -1 -32 -21z" /><path d="M3670 3160 c0 -5 11 -10 25 -10 24 0 25 -2 25 -70 0 -56 3 -70 15 -70 12 0 15 14 15 70 0 68 1 70 25 70 14 0 25 5 25 10 0 6 -28 10 -65 10 -37 0 -65 -4 -65 -10z" /><path d="M3806 3148 c-3 -13 -6 -49 -6 -80 0 -45 3 -58 15 -58 11 0 15 13 16 53 l1 52 17 -50 c23 -66 43 -69 63 -8 l15 48 8 -47 c5 -33 12 -48 23 -48 12 0 14 9 8 53 -3 28 -6 64 -6 80 0 20 -5 27 -19 27 -14 0 -24 -14 -37 -49 -10 -28 -21 -48 -24 -46 -4 3 -13 25 -20 50 -14 50 -43 62 -54 23z" /><path d="M40 370 l0 -200 25 0 25 0 0 200 0 200 -25 0 -25 0 0 -200z" /><path d="M263 460 c-27 -16 -33 -17 -33 -5 0 9 -10 15 -25 15 l-25 0 0 -150 0 -150 25 0 c25 0 25 0 25 100 0 96 1 101 29 132 22 25 37 32 65 32 61 0 71 -18 74 -149 4 -114 4 -115 28 -115 24 0 24 1 24 93 -1 116 -12 166 -45 195 -33 28 -98 30 -142 2z" /><path d="M560 525 c0 -52 -1 -55 -25 -55 -18 0 -25 -5 -25 -20 0 -15 7 -20 25 -20 l25 0 0 -130 0 -130 25 0 25 0 0 130 0 130 30 0 c23 0 30 4 30 20 0 16 -7 20 -30 20 -30 0 -30 1 -30 55 0 52 -1 55 -25 55 -24 0 -25 -3 -25 -55z" /><path d="M804 470 c-31 -12 -72 -66 -84 -110 -15 -54 2 -111 45 -158 33 -36 35 -37 109 -37 72 0 76 1 110 34 42 40 43 47 15 56 -14 5 -27 -1 -45 -18 -54 -54 -152 -39 -179 27 -8 20 -15 38 -15 41 0 3 61 5 135 5 135 0 135 0 135 23 0 40 -43 108 -80 128 -36 20 -109 24 -146 9z m111 -44 c19 -8 41 -28 50 -45 l16 -31 -106 0 c-58 0 -105 4 -105 9 0 15 42 62 64 71 30 12 42 12 81 -4z" /><path d="M1162 464 c-12 -8 -22 -10 -22 -5 0 6 -11 11 -25 11 l-25 0 0 -150 0 -150 25 0 c25 0 25 1 25 83 0 45 5 99 11 120 10 35 53 77 66 63 9 -8 33 14 33 30 0 19 -60 18 -88 -2z" /><path d="M1350 457 c-98 -65 -98 -209 0 -274 46 -32 115 -31 164 2 34 23 36 23 36 5 0 -13 7 -20 20 -20 19 0 20 7 20 150 0 143 -1 150 -20 150 -13 0 -20 -7 -20 -20 0 -18 -2 -18 -36 5 -49 33 -118 34 -164 2z m165 -57 c25 -26 30 -38 30 -81 0 -44 -4 -54 -32 -80 -43 -37 -72 -44 -116 -26 -93 40 -96 172 -4 213 43 19 86 10 122 -26z" /><path d="M1752 464 c-93 -47 -116 -171 -47 -252 34 -41 75 -55 143 -50 62 4 122 36 122 64 0 25 -27 26 -60 2 -68 -50 -161 -21 -190 60 -13 37 -12 45 3 76 33 71 124 94 187 48 33 -25 64 -23 58 4 -10 53 -147 83 -216 48z" /><path d="M2244 576 c-11 -28 4 -48 33 -44 22 2 28 8 28 28 0 20 -6 26 -28 28 -18 2 -29 -2 -33 -12z" /><path d="M2090 525 c0 -52 -1 -55 -25 -55 -18 0 -25 -5 -25 -20 0 -15 7 -20 25 -20 l25 0 0 -130 0 -130 25 0 25 0 0 130 0 130 30 0 c23 0 30 4 30 20 0 16 -7 20 -30 20 -30 0 -30 1 -30 55 0 52 -1 55 -25 55 -24 0 -25 -3 -25 -55z" /><path d="M2250 320 l0 -150 25 0 25 0 0 150 0 150 -25 0 -25 0 0 -150z" /><path d="M2374 418 c13 -29 43 -97 67 -150 24 -54 48 -98 54 -98 6 0 30 44 54 98 24 53 54 121 67 150 l24 53 -27 -3 c-23 -3 -32 -16 -73 -104 l-46 -102 -45 102 c-40 89 -49 101 -72 104 l-27 3 24 -53z" /><path d="M2774 470 c-31 -12 -72 -66 -84 -110 -15 -54 2 -111 45 -158 33 -36 35 -37 109 -37 72 0 76 1 110 34 42 40 43 47 15 56 -14 5 -27 -1 -45 -18 -54 -54 -152 -39 -179 27 -8 20 -15 38 -15 41 0 3 61 5 135 5 135 0 135 0 135 23 0 40 -43 108 -80 128 -36 20 -109 24 -146 9z m111 -44 c19 -8 41 -28 50 -45 l16 -31 -106 0 c-58 0 -105 4 -105 9 0 15 42 62 64 71 30 12 42 12 81 -4z" /><path d="M3290 561 c0 -5 -11 -86 -25 -181 -31 -214 -31 -212 -3 -208 21 3 24 12 40 132 10 71 19 130 21 132 2 2 32 -57 66 -131 37 -79 70 -135 78 -135 8 0 39 55 75 130 34 72 64 130 68 130 4 0 12 -46 19 -102 19 -155 20 -158 48 -158 21 0 24 3 19 28 -3 15 -15 95 -26 177 -25 180 -28 197 -40 193 -5 -2 -43 -73 -85 -158 l-77 -155 -79 158 c-69 136 -99 182 -99 148z" /><path d="M3854 470 c-31 -12 -72 -66 -84 -110 -15 -54 2 -111 45 -158 33 -36 35 -37 109 -37 72 0 76 1 110 34 42 40 43 47 15 56 -14 5 -27 -1 -45 -18 -54 -54 -152 -39 -179 27 -8 20 -15 38 -15 41 0 3 61 5 135 5 135 0 135 0 135 23 0 40 -43 108 -80 128 -36 20 -109 24 -146 9z m111 -44 c19 -8 41 -28 50 -45 l16 -31 -106 0 c-58 0 -105 4 -105 9 0 15 42 62 64 71 30 12 42 12 81 -4z" /><path d="M4410 504 l0 -76 -31 26 c-61 52 -174 28 -219 -46 -27 -45 -27 -131 0 -176 45 -73 143 -95 214 -47 34 23 36 23 36 5 0 -13 7 -20 20 -20 19 0 20 7 20 205 0 198 -1 205 -20 205 -18 0 -20 -7 -20 -76z m-35 -104 c25 -26 30 -38 30 -80 0 -43 -5 -54 -32 -82 -61 -60 -152 -36 -182 49 -13 36 -12 43 5 79 37 77 120 92 179 34z" /><path d="M4540 320 l0 -150 25 0 25 0 0 150 0 150 -25 0 -25 0 0 -150z" /><path d="M4534 576 c-11 -28 4 -48 33 -44 22 2 28 8 28 28 0 20 -6 26 -28 28 -18 2 -29 -2 -33 -12z" /><path d="M4730 457 c-98 -65 -98 -209 0 -274 46 -32 115 -31 164 2 34 23 36 23 36 5 0 -13 7 -20 20 -20 19 0 20 7 20 150 0 143 -1 150 -20 150 -13 0 -20 -7 -20 -20 0 -18 -2 -18 -36 5 -49 33 -118 34 -164 2z m165 -57 c25 -26 30 -38 30 -81 0 -44 -4 -54 -32 -80 -43 -37 -72 -44 -116 -26 -93 40 -96 172 -4 213 43 19 86 10 122 -26z" /></g></svg>
        </a>
      </div>
    </div>
    <div class="small-12 medium-5">
       <?php $images = get_field('image_loop', 4);
        if($images):?>
        <div class="small-12">
          <img <?php echo responsiveImage($images[0]['id'], $images[0]['sizes']['medium'], "100%");?> alt="">
       </div>
       <?php endif;?>
    </div>
   </div>
   <div class="small-12 top-bar-bottom" data-sticky-container>
    <div class="sticky secondary-background" data-sticky data-options="marginTop:0;" style="width:100%" data-top-anchor="content:top" data-btm-anchor="footer:bottom">
       <nav class="top-bar-section small-12 row align-left align-middle">
       <div class="site-logo-sticky shrink">
         <a href="<?php echo home_url();?>">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="100px" height="auto" viewBox="0 0 503.000000 420.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,420.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M2625 4184 c-442 -68 -863 -354 -1109 -754 l-43 -69 19 -143 c10 -78 20 -144 22 -146 2 -2 67 39 144 90 100 66 147 104 166 133 14 22 57 76 95 119 206 234 454 381 736 437 107 21 408 18 515 -5 464 -101 856 -475 974 -930 66 -253 50 -552 -44 -793 -132 -342 -454 -648 -796 -756 -239 -76 -489 -83 -730 -22 -384 97 -704 383 -881 787 -25 59 -48 106 -50 104 -2 -2 -11 -66 -19 -142 -8 -76 -16 -140 -17 -141 -2 -1 -56 29 -121 68 -65 38 -121 67 -124 64 -3 -3 7 -38 23 -77 167 -431 540 -796 965 -946 338 -118 733 -122 1073 -10 319 105 621 337 824 635 204 298 297 660 265 1036 -35 417 -188 736 -494 1033 -239 231 -509 370 -825 424 -138 24 -427 26 -568 4z" /><path d="M1230 2951 c-194 -60 -292 -282 -201 -458 25 -49 94 -115 151 -144 67 -34 195 -38 271 -10 72 27 136 84 174 152 27 49 30 62 30 149 0 87 -3 100 -30 149 -62 111 -167 172 -298 170 -40 0 -83 -4 -97 -8z m171 -57 c78 -23 151 -98 174 -178 44 -152 -45 -302 -199 -337 -144 -32 -289 78 -303 230 -10 111 34 205 122 257 78 45 125 52 206 28z" /><path d="M470 2640 l0 -310 40 0 40 0 0 150 c0 114 3 150 13 150 6 -1 61 -68 121 -150 l110 -150 43 0 c52 0 59 -15 -73 161 l-103 136 55 6 c63 7 118 37 139 77 22 42 19 128 -5 168 -35 57 -84 72 -242 72 l-138 0 0 -310z m288 233 c40 -30 51 -85 27 -132 -25 -45 -64 -60 -162 -60 l-73 -1 0 111 0 111 90 -4 c70 -3 96 -9 118 -25z" /><path d="M1730 2925 c0 -24 2 -25 70 -25 l70 0 0 -285 0 -285 35 0 35 0 0 285 0 285 70 0 c68 0 70 1 70 25 l0 25 -175 0 -175 0 0 -25z" /><path d="M2371 2848 c-26 -57 -92 -194 -145 -306 -53 -111 -96 -204 -96 -207 0 -3 17 -5 39 -5 l38 0 49 105 48 105 128 0 128 0 50 -105 49 -105 40 0 40 0 -58 123 c-32 67 -97 206 -146 310 -51 109 -94 187 -102 187 -7 0 -35 -46 -62 -102z m157 -254 c-3 -2 -48 -3 -100 -2 l-95 3 50 105 49 105 51 -103 c27 -56 48 -105 45 -108z" /><path d="M2840 2641 l0 -311 35 0 35 0 0 149 0 149 108 3 c85 3 114 8 142 25 104 61 108 193 7 268 -25 19 -45 21 -178 24 l-149 4 0 -311z m239 253 c67 -14 105 -86 77 -146 -24 -50 -50 -61 -153 -66 l-93 -4 0 111 0 111 69 0 c38 0 82 -3 100 -6z" /><path d="M3360 2640 l0 -310 35 0 35 0 0 310 0 310 -35 0 -35 0 0 -310z" /><path d="M3560 2929 c7 -11 42 -69 80 -129 38 -60 74 -118 80 -130 10 -19 0 -39 -84 -175 -53 -84 -96 -156 -96 -159 0 -3 18 -6 39 -6 l39 0 78 125 c42 69 78 125 79 125 1 0 37 -56 79 -125 l78 -125 39 0 c21 0 39 3 39 6 0 3 -43 75 -96 160 l-96 154 88 142 c49 78 91 146 93 150 1 5 -16 8 -40 6 -42 -3 -42 -3 -110 -111 -37 -60 -69 -110 -71 -113 -2 -2 -35 48 -74 111 l-69 114 -43 1 c-40 0 -42 -1 -32 -21z" /><path d="M3670 3160 c0 -5 11 -10 25 -10 24 0 25 -2 25 -70 0 -56 3 -70 15 -70 12 0 15 14 15 70 0 68 1 70 25 70 14 0 25 5 25 10 0 6 -28 10 -65 10 -37 0 -65 -4 -65 -10z" /><path d="M3806 3148 c-3 -13 -6 -49 -6 -80 0 -45 3 -58 15 -58 11 0 15 13 16 53 l1 52 17 -50 c23 -66 43 -69 63 -8 l15 48 8 -47 c5 -33 12 -48 23 -48 12 0 14 9 8 53 -3 28 -6 64 -6 80 0 20 -5 27 -19 27 -14 0 -24 -14 -37 -49 -10 -28 -21 -48 -24 -46 -4 3 -13 25 -20 50 -14 50 -43 62 -54 23z" /><path d="M40 370 l0 -200 25 0 25 0 0 200 0 200 -25 0 -25 0 0 -200z" /><path d="M263 460 c-27 -16 -33 -17 -33 -5 0 9 -10 15 -25 15 l-25 0 0 -150 0 -150 25 0 c25 0 25 0 25 100 0 96 1 101 29 132 22 25 37 32 65 32 61 0 71 -18 74 -149 4 -114 4 -115 28 -115 24 0 24 1 24 93 -1 116 -12 166 -45 195 -33 28 -98 30 -142 2z" /><path d="M560 525 c0 -52 -1 -55 -25 -55 -18 0 -25 -5 -25 -20 0 -15 7 -20 25 -20 l25 0 0 -130 0 -130 25 0 25 0 0 130 0 130 30 0 c23 0 30 4 30 20 0 16 -7 20 -30 20 -30 0 -30 1 -30 55 0 52 -1 55 -25 55 -24 0 -25 -3 -25 -55z" /><path d="M804 470 c-31 -12 -72 -66 -84 -110 -15 -54 2 -111 45 -158 33 -36 35 -37 109 -37 72 0 76 1 110 34 42 40 43 47 15 56 -14 5 -27 -1 -45 -18 -54 -54 -152 -39 -179 27 -8 20 -15 38 -15 41 0 3 61 5 135 5 135 0 135 0 135 23 0 40 -43 108 -80 128 -36 20 -109 24 -146 9z m111 -44 c19 -8 41 -28 50 -45 l16 -31 -106 0 c-58 0 -105 4 -105 9 0 15 42 62 64 71 30 12 42 12 81 -4z" /><path d="M1162 464 c-12 -8 -22 -10 -22 -5 0 6 -11 11 -25 11 l-25 0 0 -150 0 -150 25 0 c25 0 25 1 25 83 0 45 5 99 11 120 10 35 53 77 66 63 9 -8 33 14 33 30 0 19 -60 18 -88 -2z" /><path d="M1350 457 c-98 -65 -98 -209 0 -274 46 -32 115 -31 164 2 34 23 36 23 36 5 0 -13 7 -20 20 -20 19 0 20 7 20 150 0 143 -1 150 -20 150 -13 0 -20 -7 -20 -20 0 -18 -2 -18 -36 5 -49 33 -118 34 -164 2z m165 -57 c25 -26 30 -38 30 -81 0 -44 -4 -54 -32 -80 -43 -37 -72 -44 -116 -26 -93 40 -96 172 -4 213 43 19 86 10 122 -26z" /><path d="M1752 464 c-93 -47 -116 -171 -47 -252 34 -41 75 -55 143 -50 62 4 122 36 122 64 0 25 -27 26 -60 2 -68 -50 -161 -21 -190 60 -13 37 -12 45 3 76 33 71 124 94 187 48 33 -25 64 -23 58 4 -10 53 -147 83 -216 48z" /><path d="M2244 576 c-11 -28 4 -48 33 -44 22 2 28 8 28 28 0 20 -6 26 -28 28 -18 2 -29 -2 -33 -12z" /><path d="M2090 525 c0 -52 -1 -55 -25 -55 -18 0 -25 -5 -25 -20 0 -15 7 -20 25 -20 l25 0 0 -130 0 -130 25 0 25 0 0 130 0 130 30 0 c23 0 30 4 30 20 0 16 -7 20 -30 20 -30 0 -30 1 -30 55 0 52 -1 55 -25 55 -24 0 -25 -3 -25 -55z" /><path d="M2250 320 l0 -150 25 0 25 0 0 150 0 150 -25 0 -25 0 0 -150z" /><path d="M2374 418 c13 -29 43 -97 67 -150 24 -54 48 -98 54 -98 6 0 30 44 54 98 24 53 54 121 67 150 l24 53 -27 -3 c-23 -3 -32 -16 -73 -104 l-46 -102 -45 102 c-40 89 -49 101 -72 104 l-27 3 24 -53z" /><path d="M2774 470 c-31 -12 -72 -66 -84 -110 -15 -54 2 -111 45 -158 33 -36 35 -37 109 -37 72 0 76 1 110 34 42 40 43 47 15 56 -14 5 -27 -1 -45 -18 -54 -54 -152 -39 -179 27 -8 20 -15 38 -15 41 0 3 61 5 135 5 135 0 135 0 135 23 0 40 -43 108 -80 128 -36 20 -109 24 -146 9z m111 -44 c19 -8 41 -28 50 -45 l16 -31 -106 0 c-58 0 -105 4 -105 9 0 15 42 62 64 71 30 12 42 12 81 -4z" /><path d="M3290 561 c0 -5 -11 -86 -25 -181 -31 -214 -31 -212 -3 -208 21 3 24 12 40 132 10 71 19 130 21 132 2 2 32 -57 66 -131 37 -79 70 -135 78 -135 8 0 39 55 75 130 34 72 64 130 68 130 4 0 12 -46 19 -102 19 -155 20 -158 48 -158 21 0 24 3 19 28 -3 15 -15 95 -26 177 -25 180 -28 197 -40 193 -5 -2 -43 -73 -85 -158 l-77 -155 -79 158 c-69 136 -99 182 -99 148z" /><path d="M3854 470 c-31 -12 -72 -66 -84 -110 -15 -54 2 -111 45 -158 33 -36 35 -37 109 -37 72 0 76 1 110 34 42 40 43 47 15 56 -14 5 -27 -1 -45 -18 -54 -54 -152 -39 -179 27 -8 20 -15 38 -15 41 0 3 61 5 135 5 135 0 135 0 135 23 0 40 -43 108 -80 128 -36 20 -109 24 -146 9z m111 -44 c19 -8 41 -28 50 -45 l16 -31 -106 0 c-58 0 -105 4 -105 9 0 15 42 62 64 71 30 12 42 12 81 -4z" /><path d="M4410 504 l0 -76 -31 26 c-61 52 -174 28 -219 -46 -27 -45 -27 -131 0 -176 45 -73 143 -95 214 -47 34 23 36 23 36 5 0 -13 7 -20 20 -20 19 0 20 7 20 205 0 198 -1 205 -20 205 -18 0 -20 -7 -20 -76z m-35 -104 c25 -26 30 -38 30 -80 0 -43 -5 -54 -32 -82 -61 -60 -152 -36 -182 49 -13 36 -12 43 5 79 37 77 120 92 179 34z" /><path d="M4540 320 l0 -150 25 0 25 0 0 150 0 150 -25 0 -25 0 0 -150z" /><path d="M4534 576 c-11 -28 4 -48 33 -44 22 2 28 8 28 28 0 20 -6 26 -28 28 -18 2 -29 -2 -33 -12z" /><path d="M4730 457 c-98 -65 -98 -209 0 -274 46 -32 115 -31 164 2 34 23 36 23 36 5 0 -13 7 -20 20 -20 19 0 20 7 20 150 0 143 -1 150 -20 150 -13 0 -20 -7 -20 -20 0 -18 -2 -18 -36 5 -49 33 -118 34 -164 2z m165 -57 c25 -26 30 -38 30 -81 0 -44 -4 -54 -32 -80 -43 -37 -72 -44 -116 -26 -93 40 -96 172 -4 213 43 19 86 10 122 -26z" /></g></svg>
        </a>
       </div>
        <ul class="dropdown menu small-12 medium-expand" data-dropdown-menu id="main-menu">
          <?php if (has_nav_menu('primary_navigation')) :?>
              <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new Roots\Sage\Extras\Foundation_Nav_Menu()]);?>
          <?php endif;?>
        </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
