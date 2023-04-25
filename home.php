<?php
/*
Template Name: Home
Template Post Type: post, page, product
*/
?>


<?php get_header(); ?>

<main class="main">


    <svg display="none">
        <symbol id="next" viewBox="0 0 32 32">

            <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z" />

        </symbol>
    </svg>
    <svg display="none">
        <symbol id="prev" viewBox="0 0 32 32">

            <path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z" />


        </symbol>
    </svg>
    <svg display="none">
        <symbol id="whatsapp" viewBox="0 0 100 100">

            <path d="M50 15C30.6816 15 15 30.6816 15 50C15 56.1309 16.607 61.8845 19.3789 66.8965L15.0723 82.4648C14.6718 83.914 16.0854 85.3284 17.5352 84.9258L33.1055 80.6191C38.1181 83.3915 43.8697 85 50 85C69.3184 85 85 69.3184 85 50C85 30.6816 69.3184 15 50 15ZM50 17C68.2376 17 83 31.7624 83 50C83 68.2376 68.2376 83 50 83C44.0648 83 38.5073 81.4269 33.6953 78.6855C33.5808 78.6205 33.4545 78.5788 33.3238 78.5627C33.1931 78.5466 33.0605 78.5565 32.9336 78.5918L17 82.998L21.4082 67.0664C21.4432 66.9394 21.4528 66.8067 21.4364 66.676C21.4199 66.5453 21.3778 66.4191 21.3125 66.3047C18.5721 61.4937 17 55.9352 17 50C17 31.7624 31.7624 17 50 17ZM50 22C34.5418 22 22 34.5418 22 50C22 55.8816 23.8362 61.3301 26.9355 65.8359L24.4082 74.9766C24.3846 75.0618 24.3841 75.1518 24.4066 75.2373C24.4292 75.3229 24.474 75.4009 24.5366 75.4634C24.5991 75.526 24.6771 75.5708 24.7627 75.5934C24.8482 75.6159 24.9382 75.6154 25.0234 75.5918L34.1641 73.0645C38.6704 76.1647 44.1185 78 50 78C65.4582 78 78 65.4582 78 50C78 42.3003 74.8888 35.3216 69.8555 30.2598C69.762 30.1655 69.6349 30.1122 69.5021 30.1117C69.3693 30.1111 69.2417 30.1633 69.1475 30.2568C69.0532 30.3503 68.9999 30.4775 68.9994 30.6102C68.9988 30.743 69.051 30.8706 69.1445 30.9648C73.9992 35.847 77 42.5697 77 50C77 64.9178 64.9178 77 50 77C44.2377 77 38.9059 75.1917 34.5215 72.1172C34.4611 72.075 34.3922 72.0466 34.3196 72.0341C34.247 72.0216 34.1726 72.0253 34.1016 72.0449L25.6074 74.3945L27.957 65.9004C27.9767 65.8294 27.9804 65.7549 27.9679 65.6824C27.9554 65.6098 27.927 65.5408 27.8848 65.4805C24.8103 61.0961 23 55.7633 23 50C23 35.0822 35.0822 23 50 23C52.5537 23 55.0209 23.3625 57.3633 24.0254C57.4265 24.0433 57.4926 24.0487 57.5579 24.0411C57.6232 24.0335 57.6864 24.0131 57.7438 23.9811C57.8012 23.949 57.8517 23.906 57.8925 23.8545C57.9333 23.803 57.9635 23.7439 57.9814 23.6807C57.9994 23.6174 58.0047 23.5513 57.9971 23.486C57.9895 23.4207 57.9691 23.3576 57.9371 23.3002C57.9051 23.2428 57.8621 23.1923 57.8106 23.1515C57.759 23.1107 57.6999 23.0805 57.6367 23.0625C55.2091 22.3754 52.6483 22 50 22ZM60.4961 24.0781C60.3804 24.0785 60.2684 24.1191 60.1792 24.1928C60.09 24.2666 60.0292 24.369 60.007 24.4826C59.9849 24.5962 60.0029 24.7139 60.0579 24.8158C60.1129 24.9176 60.2015 24.9972 60.3086 25.041C61.323 25.4609 62.3046 25.9429 63.2539 26.4785C63.3111 26.5149 63.3752 26.5392 63.4421 26.55C63.509 26.5608 63.5774 26.5579 63.6432 26.5415C63.709 26.5251 63.7707 26.4954 63.8247 26.4544C63.8786 26.4134 63.9237 26.3618 63.9571 26.3028C63.9905 26.2438 64.0115 26.1786 64.019 26.1112C64.0264 26.0439 64.0201 25.9757 64.0003 25.9108C63.9806 25.846 63.9479 25.7858 63.9042 25.734C63.8605 25.6822 63.8067 25.6398 63.7461 25.6094C62.7634 25.055 61.745 24.5533 60.6914 24.1172C60.6296 24.0912 60.5632 24.0779 60.4961 24.0781ZM65.502 26.7812C65.3942 26.78 65.2889 26.8137 65.2017 26.8771C65.1146 26.9406 65.0503 27.0306 65.0185 27.1336C64.9867 27.2366 64.9889 27.3471 65.025 27.4487C65.0611 27.5502 65.1291 27.6374 65.2188 27.6973C65.8961 28.1603 66.5521 28.6522 67.1816 29.1719C67.2839 29.2563 67.4156 29.2966 67.5476 29.284C67.6797 29.2714 67.8013 29.2068 67.8857 29.1045C67.9702 29.0022 68.0105 28.8705 67.9979 28.7385C67.9852 28.6064 67.9207 28.4848 67.8184 28.4004C67.1639 27.8601 66.4819 27.352 65.7812 26.873C65.6995 26.8152 65.6021 26.7832 65.502 26.7812ZM38.5059 34.0078C37.8453 34.0078 36.8243 34.26 35.9785 35.1992C35.2711 35.9727 32.998 38.1737 32.998 42.3965C32.998 46.6798 36.023 50.6636 36.4121 51.1953L36.4141 51.1992L36.416 51.2012C36.4304 51.2203 36.5757 51.4388 36.7754 51.7344C36.9751 52.03 37.2482 52.427 37.5898 52.8984C38.2731 53.8412 39.231 55.0814 40.4395 56.4102C42.8563 59.0677 46.2705 62.0864 50.5 63.7773V63.7793C53.9509 65.1558 56.0495 65.7179 57.5039 65.916C58.9583 66.1141 59.7747 65.9344 60.4707 65.8711H60.4727C61.3872 65.784 62.595 65.256 63.7461 64.502C64.8972 63.7479 65.9732 62.7807 66.3789 61.625C66.7313 60.6247 66.9095 59.6971 66.9727 58.959C67.0042 58.5899 67.0066 58.268 66.9863 58C66.9661 57.732 66.9529 57.5363 66.8164 57.3008H66.8145C66.6373 56.9967 66.3695 56.822 66.0781 56.6602C65.7872 56.4985 65.4498 56.3455 65.0527 56.1445H65.0508C64.6379 55.9337 63.4426 55.3353 62.248 54.752C61.0529 54.1683 59.9159 53.6185 59.4492 53.4453H59.4473C59.0645 53.3055 58.68 53.164 58.2305 53.2168C57.781 53.2696 57.353 53.5686 57.0332 54.0527C56.5441 54.7932 54.9635 56.688 54.5 57.2227V57.2246H54.498C54.3071 57.4453 54.1968 57.5011 54.0645 57.5176C53.9321 57.534 53.7053 57.4936 53.3418 57.3125L53.3457 57.3164C52.8732 57.0752 52.069 56.7791 50.9551 56.1758C49.8412 55.5724 48.4479 54.6785 46.9297 53.3066C44.5853 51.1886 42.97 48.5381 42.5078 47.7344V47.7324C42.3224 47.4127 42.3425 47.294 42.3906 47.1621C42.4383 47.0314 42.5831 46.8597 42.7812 46.6582L42.7852 46.6543C43.2007 46.2401 43.6423 45.6466 44.0332 45.1855L44.0352 45.1836V45.1816C44.4748 44.6542 44.6417 44.2507 44.9082 43.7168L44.9102 43.7148V43.7129C45.2559 43.0021 45.0735 42.306 44.8438 41.834C44.819 41.7819 44.6724 41.427 44.4863 40.9648C44.2998 40.5014 44.0596 39.9035 43.8047 39.2676C43.2948 37.9958 42.7224 36.5764 42.3535 35.7461C42.0237 35.0002 41.6479 34.5479 41.2227 34.2988C40.7988 34.0506 40.3783 34.0374 40.0859 34.0273H40.082C39.592 34.0068 39.0465 34.0078 38.5059 34.0078ZM38.5059 35.0078C39.0479 35.0078 39.5839 35.008 40.043 35.0273H40.0449H40.0469C40.3365 35.0373 40.5235 35.0489 40.7168 35.1621C40.9101 35.2753 41.1613 35.5213 41.4395 36.1504V36.1523C41.7926 36.9471 42.3679 38.3709 42.877 39.6406C43.1315 40.2755 43.371 40.872 43.5586 41.3379C43.7462 41.8038 43.8685 42.1106 43.9434 42.2676V42.2695L43.9453 42.2715C44.1176 42.6255 44.2 42.8882 44.0117 43.2754C43.7321 43.8361 43.6288 44.1077 43.2676 44.541L43.2715 44.5391C42.8495 45.0367 42.3956 45.6315 42.0762 45.9492L42.0742 45.9512L42.0723 45.9531C41.8661 46.1623 41.597 46.4207 41.4512 46.8203C41.3053 47.22 41.353 47.7351 41.6426 48.2344C42.1312 49.084 43.7793 51.8079 46.2598 54.0488C47.843 55.4792 49.308 56.4207 50.4785 57.0547C51.6494 57.6889 52.5561 58.0353 52.8926 58.207H52.8945L52.8965 58.209C53.348 58.4339 53.7633 58.5625 54.1875 58.5098C54.6111 58.4571 54.97 58.2066 55.2539 57.8789C55.7405 57.3176 57.2763 55.501 57.8691 54.6035C58.0904 54.2686 58.2035 54.2257 58.3457 54.209C58.4879 54.1923 58.7442 54.2535 59.1035 54.3848C59.3873 54.4903 60.6198 55.0698 61.8086 55.6504C62.9984 56.2315 64.2009 56.8326 64.5977 57.0352H64.5996C65.0177 57.2468 65.3585 57.4036 65.5918 57.5332C65.8251 57.6628 65.9273 57.7618 65.9512 57.8027C65.9147 57.7397 65.9753 57.8787 65.9902 58.0762C66.0051 58.2737 66.0024 58.548 65.9746 58.873C65.919 59.5232 65.7581 60.3773 65.4355 61.293C65.1662 62.0603 64.2476 62.9793 63.1992 63.666C62.1508 64.3528 60.9553 64.8201 60.3789 64.875C59.5917 64.9468 58.9676 65.1048 57.6387 64.9238C56.3088 64.7427 54.2792 64.2091 50.8711 62.8496C46.8515 61.2426 43.5341 58.3272 41.1797 55.7383C40.0025 54.4438 39.0653 53.2326 38.3984 52.3125C38.065 51.8524 37.7993 51.4656 37.6035 51.1758C37.4077 50.8859 37.3024 50.716 37.2148 50.5996C36.7974 50.0291 33.998 46.1952 33.998 42.3965C33.998 38.5192 35.9262 36.7375 36.7168 35.873V35.8711H36.7188C37.3563 35.1613 38.0973 35.0078 38.5059 35.0078Z" />
        </symbol>
    </svg>
    <svg display="none">
        <symbol id="telegram" viewBox="0 0 100 100">

            <path d="M50 14C30.1296 14 14 30.1296 14 50C14 69.8704 30.1296 86 50 86C69.8704 86 86 69.8704 86 50C86 30.1296 69.8704 14 50 14ZM50 16C68.7895 16 84 31.2105 84 50C84 68.7895 68.7895 84 50 84C31.2105 84 16 68.7895 16 50C16 31.2105 31.2105 16 50 16ZM50 19C32.8848 19 19 32.8848 19 50C19 67.1152 32.8848 81 50 81C67.1152 81 81 67.1152 81 50C81 40.9044 77.0791 32.7168 70.8359 27.0469C70.7877 27.0005 70.7307 26.9643 70.6683 26.9403C70.6058 26.9164 70.5392 26.9052 70.4723 26.9075C70.4055 26.9098 70.3398 26.9254 70.2791 26.9536C70.2184 26.9817 70.164 27.0217 70.119 27.0712C70.0741 27.1207 70.0395 27.1788 70.0174 27.2419C69.9953 27.305 69.986 27.3719 69.9902 27.4387C69.9944 27.5054 70.012 27.5707 70.0418 27.6305C70.0717 27.6904 70.1133 27.7436 70.1641 27.7871C76.2069 33.2752 80 41.1916 80 50C80 66.5748 66.5748 80 50 80C33.4252 80 20 66.5748 20 50C20 33.4252 33.4252 20 50 20C53.6307 20 57.1081 20.6459 60.3281 21.8262C60.3898 21.8488 60.4553 21.859 60.521 21.8562C60.5866 21.8535 60.6511 21.8378 60.7106 21.8102C60.7702 21.7825 60.8238 21.7434 60.8682 21.695C60.9127 21.6467 60.9472 21.59 60.9698 21.5283C60.9924 21.4667 61.0026 21.4011 60.9998 21.3355C60.997 21.2699 60.9814 21.2054 60.9537 21.1458C60.9261 21.0862 60.8869 21.0327 60.8386 20.9882C60.7902 20.9438 60.7336 20.9093 60.6719 20.8867C57.3439 19.6669 53.7493 19 50 19ZM63.4805 22.1406C63.3681 22.1434 63.26 22.1839 63.1735 22.2557C63.087 22.3274 63.0272 22.4262 63.0037 22.5361C62.9803 22.646 62.9945 22.7606 63.0441 22.8614C63.0938 22.9622 63.1759 23.0434 63.2773 23.0918C63.9471 23.4232 64.6045 23.7793 65.2461 24.1582C65.3027 24.1932 65.3657 24.2165 65.4315 24.2269C65.4972 24.2372 65.5644 24.2343 65.629 24.2183C65.6936 24.2024 65.7543 24.1737 65.8077 24.1339C65.8611 24.0942 65.906 24.0442 65.9398 23.9868C65.9736 23.9295 65.9956 23.866 66.0046 23.8001C66.0135 23.7341 66.0092 23.667 65.9919 23.6028C65.9746 23.5385 65.9446 23.4784 65.9037 23.4258C65.8629 23.3733 65.8119 23.3295 65.7539 23.2969C65.0915 22.9057 64.4149 22.5379 63.7227 22.1953C63.6478 22.157 63.5645 22.1382 63.4805 22.1406ZM67.5078 24.5117C67.4909 24.5115 67.4739 24.5122 67.457 24.5137C67.3536 24.5214 67.2551 24.5611 67.1752 24.6273C67.0953 24.6934 67.0379 24.7828 67.0111 24.883C66.9843 24.9833 66.9893 25.0893 67.0255 25.1866C67.0616 25.2838 67.1271 25.3674 67.2129 25.4258C67.5456 25.6591 67.8732 25.9 68.1953 26.1465C68.2475 26.1865 68.3071 26.2158 68.3706 26.2328C68.4341 26.2498 68.5004 26.2542 68.5656 26.2455C68.6308 26.2369 68.6937 26.2156 68.7506 26.1826C68.8076 26.1497 68.8575 26.1059 68.8975 26.0537C68.9375 26.0015 68.9668 25.942 68.9838 25.8784C69.0008 25.8149 69.0051 25.7486 68.9965 25.6834C68.9879 25.6182 68.9665 25.5554 68.9336 25.4984C68.9007 25.4415 68.8569 25.3916 68.8047 25.3516C68.4708 25.096 68.1304 24.8481 67.7871 24.6074C67.7058 24.5481 67.6084 24.5148 67.5078 24.5117ZM64.375 34C63.4761 34 62.6014 34.4132 62.5996 34.4141L29.75 47.7129C29.7026 47.7286 29.3401 47.8517 28.9414 48.1172C28.5161 48.4004 28 48.8911 28 49.627C28 50.4132 28.4807 50.9651 28.9043 51.2695C29.3279 51.574 29.75 51.6973 29.75 51.6973C29.7539 51.698 29.7578 51.6986 29.7617 51.6992L37.3633 53.7617C37.442 53.982 38.3004 56.3822 39.2461 59.0254C39.7402 60.4063 40.2372 61.7918 40.6152 62.8457C40.8043 63.3727 40.9634 63.8164 41.0781 64.1348C41.1355 64.2939 41.1816 64.4221 41.2148 64.5137C41.2481 64.6053 41.2544 64.6287 41.2793 64.6895C41.4806 65.182 41.6627 65.4672 41.8379 65.6523C41.9255 65.7449 42.0142 65.8116 42.0996 65.8574C42.1206 65.8687 42.1401 65.8742 42.1602 65.8828C42.1634 65.8848 42.1666 65.8868 42.1699 65.8887C42.1732 65.8902 42.1764 65.891 42.1797 65.8926C42.1937 65.8981 42.2088 65.9059 42.2227 65.9102C42.2395 65.9153 42.2493 65.9159 42.2695 65.9199C42.4305 65.9776 42.5932 66.0037 42.7422 65.9941C43.2267 65.9744 43.5664 65.707 43.5664 65.707C43.5772 65.6984 43.5876 65.6892 43.5977 65.6797L48.5508 61.1035L56.0391 67.4395C56.0391 67.4395 56.2231 67.6046 56.5059 67.7383C56.7886 67.872 57.2018 68 57.7266 68C58.6997 68 59.3573 67.5646 59.7051 67.123C60.0528 66.6815 60.1348 66.2148 60.1348 66.2148V66.2227C60.1348 66.2227 61.5808 58.7268 63.0332 51.1973C63.7594 47.4325 64.487 43.6596 65.0352 40.8105C65.3092 39.386 65.5392 38.1917 65.7012 37.3457C65.7821 36.9227 65.8461 36.5866 65.8906 36.3516C65.9129 36.2341 65.9311 36.1418 65.9434 36.0762C65.9556 36.0105 65.957 36.0149 65.9668 35.9434C65.986 35.8043 66 35.6541 66 35.5C66 35.0542 65.8026 34.6457 65.4941 34.3848C65.1857 34.1238 64.7875 34 64.375 34ZM64.375 35C64.5875 35 64.7518 35.0637 64.8496 35.1465C64.9474 35.2293 65 35.3208 65 35.5C65 35.5879 64.9913 35.6997 64.9766 35.8066C64.9841 35.752 64.9709 35.8309 64.959 35.8945C64.9471 35.9582 64.9304 36.0491 64.9082 36.166C64.8639 36.3999 64.7997 36.7355 64.7188 37.1582C64.5569 38.0036 64.3287 39.1967 64.0547 40.6211C63.5066 43.4698 62.7789 47.2431 62.0527 51.0078C60.6004 58.5372 59.1523 66.0332 59.1523 66.0332C59.1517 66.0358 59.151 66.0384 59.1504 66.041C59.1504 66.041 59.1124 66.2595 58.9199 66.5039C58.7275 66.7484 58.4264 67 57.7266 67C57.3613 67 57.1013 66.9152 56.9336 66.8359C56.7659 66.7566 56.7207 66.709 56.7207 66.709C56.715 66.703 56.7091 66.6971 56.7031 66.6914L44.6191 56.4648L59.541 42.2734L59.502 42.3066C59.8304 42.0538 60 41.668 60 41.2852V41.2832C59.9984 41.0159 59.9138 40.7422 59.7402 40.5117C59.4974 40.1853 59.1195 40.0022 58.7383 40H58.7363C58.4608 39.9987 58.184 40.0915 57.9551 40.2676L57.9961 40.2383L37.7461 52.7715L37.998 52.9141C37.9611 52.8936 37.9217 52.8778 37.8809 52.8672L30.0273 50.7363L30.0234 50.7344C30.0143 50.7316 29.756 50.6514 29.4883 50.459C29.2159 50.2632 29 50.0197 29 49.627C29 49.3778 29.2024 49.1448 29.4961 48.9492C29.7898 48.7537 30.0918 48.6523 30.0918 48.6523C30.103 48.6488 30.1141 48.6449 30.125 48.6406L62.9883 35.3359C62.9929 35.3341 62.9974 35.3321 63.002 35.3301C63.002 35.3301 63.8149 35 64.375 35ZM58.7324 41C58.8086 41.0003 58.8807 41.0303 58.9395 41.1094L58.9414 41.1113C58.9796 41.1616 58.9992 41.2226 59 41.2871C58.9995 41.3755 58.9617 41.4609 58.8906 41.5156C58.877 41.526 58.864 41.5371 58.8516 41.5488L43.5254 56.125C43.4463 56.2006 43.3941 56.3001 43.377 56.4082H43.373L42.1074 64.043C42.0801 63.9675 42.0551 63.9011 42.0176 63.7969C41.9032 63.4794 41.7436 63.0345 41.5547 62.5078C41.1768 61.4544 40.6815 60.0682 40.1875 58.6875C39.2675 56.1162 38.4767 53.9074 38.3555 53.5684L58.5234 41.0879C58.5376 41.0788 58.5513 41.069 58.5645 41.0586C58.621 41.0151 58.6786 40.9997 58.7324 41ZM44.2168 57.4355L47.7812 60.4531L42.9824 64.8867L44.2168 57.4355Z" />
        </symbol>
    </svg>

    <section class="hero">
        <div class="container container-main">
            <div class="hero__inner">
                <div class="hero__inner__left">
                    <h1 class="hero__inner__left__title"><?php the_field('Hero_title', 7); ?></h1>
                    <img class="hero__inner__img__mobile" src="<?php the_field('hero_img', 7); ?>" alt="Полистирол">
                    <span class="hero__inner__left__text"><?php the_field('hero_text', 7); ?></span>
                    <div class="hero__inner__left__buttons">
                        <button class="hero__inner__left__buttons__button hero__inner__left__buttons__button__accent" data-modal>Связаться
                            с нами</button>
                        <a href="#catalog" class="hero__inner__left__buttons__button">Каталог</a>
                    </div>
                </div>

                <div class="hero__inner__right">
                    <div class="hero__inner__right__img" style="background-image: url(<?php the_field('hero_img', 7); ?>);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="adventages" id="adventages">
        <div class="container container-main">
            <div class="adventages__inner">
                <h1 class="adventages__inner__title">Достоинства блока</h1>
                <div class="adventages__inner__row">


                    <!-- цикл на добавление постов (достоинств блока) -->
                    <?php
                    $args = array(
                        'post_type' => 'advantages-video',
                        'posts_per_page' => 3,
                        'category' => 19
                    );
                    $the_query = new WP_Query($args); ?>

                    <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <!-- <div class="testing__inner__documents__item"><?php the_field('document_pdf'); ?></div> -->

                            <div class="adventages__inner__row__item">
                                <div class="adventages__video__container">
                                    <div class="adventages__inner__row__item__video" data-play ><?php the_field('video-adventages'); ?></div>
                                    <!-- <img class="adventages__inner__row__item__video__bg" src="./assets/images/adventages/play.png" alt="play"> -->
                                </div>
                                <h5 class="adventages__inner__row__item__title"><?php the_field('adventages_title'); ?>Блок стандартный</h5>
                                <span class="adventages__inner__row__item__text"><?php the_field('advantages_text'); ?>Когда-то давно в мире строительства появился новый
                                    материал </span>
                            </div>




                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    <?php endif; ?>

                </div>
                <div class="adventages__inner__img" style="background-image: url(<?php the_field('bg_image_right', 7); ?>);">
                </div>
            </div>
        </div>
    </section>
    <section class="catalog" id="catalog">
        <div class="container container-main">
            <div class="catalog__inner">
                <h1 class="catalog__inner__title">Каталог</h1>
                <!-- Slider main container -->
                <div class="swiper swiper__catalog">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        <div class="swiper-slide swiper-slide-catalog">
                            <div class="swiper__slide__inner">
                                <svg class="header__inner__widgets__favorites swiper__slide__inner__favourites" data-heart>
                                    <use xlink:href="#favorites"></use>
                                </svg>
                                <a href="./products.html"><img class="swiper__slide__inner__image" src="<?php bloginfo('template_url'); ?>/assets/images/catalog/Catalog.png" alt="block"></a>
                                <a href="./products.html">
                                    <h5 class="swiper__slide__inner__title">Блок стандартный</h5>
                                </a>
                                <span class="swiper__slide__inner__price">9 900р.</span>
                                <span class="swiper__slide__inner__info">ГОСТ 33929-2016</span>


                                <div class="swiper__slide__inner__list"><b>Назначение:</b> специализируется на производстве
                                    и продаже</div>
                                <div class="swiper__slide__inner__list"><b>Размер:</b> 125х55х102</div>
                                <div class="swiper__slide__inner__list swiper__slide__inner__list-last"><b>Плотность:</b>
                                    D500</div>

                                <button class="swiper__slide__inner__addbasket" type="button">Добавить в корзину</button>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-catalog">
                            <div class="swiper__slide__inner">
                                <svg class="header__inner__widgets__favorites swiper__slide__inner__favourites" data-heart>
                                    <use xlink:href="#favorites"></use>
                                </svg>
                                <a href="./products.html"><img class="swiper__slide__inner__image" src="<?php bloginfo('template_url'); ?>/assets/images/catalog/Catalog.png" alt="block"></a>
                                <a href="./products.html">
                                    <h5 class="swiper__slide__inner__title">Блок стандартный</h5>
                                </a>
                                <span class="swiper__slide__inner__price">9 900р.</span>
                                <span class="swiper__slide__inner__info">ГОСТ 33929-2016</span>


                                <div class="swiper__slide__inner__list"><b>Назначение:</b> специализируется на производстве
                                    и продаже</div>
                                <div class="swiper__slide__inner__list"><b>Размер:</b> 125х55х102</div>
                                <div class="swiper__slide__inner__list swiper__slide__inner__list-last"><b>Плотность:</b>
                                    D500</div>

                                <button class="swiper__slide__inner__addbasket" type="button">Добавить в корзину</button>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-catalog">
                            <div class="swiper__slide__inner">
                                <svg class="header__inner__widgets__favorites swiper__slide__inner__favourites" data-heart>
                                    <use xlink:href="#favorites"></use>
                                </svg>
                                <a href="./products.html"><img class="swiper__slide__inner__image" src="<?php bloginfo('template_url'); ?>/assets/images/catalog/Catalog.png" alt="block"></a>
                                <a href="./products.html">
                                    <h5 class="swiper__slide__inner__title">Блок стандартный</h5>
                                </a>
                                <span class="swiper__slide__inner__price">9 900р.</span>
                                <span class="swiper__slide__inner__info">ГОСТ 33929-2016</span>


                                <div class="swiper__slide__inner__list"><b>Назначение:</b> специализируется на производстве
                                    и продаже</div>
                                <div class="swiper__slide__inner__list"><b>Размер:</b> 125х55х102</div>
                                <div class="swiper__slide__inner__list swiper__slide__inner__list-last"><b>Плотность:</b>
                                    D500</div>

                                <button class="swiper__slide__inner__addbasket" type="button">Добавить в корзину</button>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-catalog">
                            <div class="swiper__slide__inner">
                                <svg class="header__inner__widgets__favorites swiper__slide__inner__favourites" data-heart>
                                    <use xlink:href="#favorites"></use>
                                </svg>
                                <a href="./products.html"><img class="swiper__slide__inner__image" src="<?php bloginfo('template_url'); ?>/assets/images/catalog/Catalog.png" alt="block"></a>
                                <a href="./products.html">
                                    <h5 class="swiper__slide__inner__title">Блок стандартный</h5>
                                </a>
                                <span class="swiper__slide__inner__price">9 900р.</span>
                                <span class="swiper__slide__inner__info">ГОСТ 33929-2016</span>


                                <div class="swiper__slide__inner__list"><b>Назначение:</b> специализируется на производстве
                                    и продаже</div>
                                <div class="swiper__slide__inner__list"><b>Размер:</b> 125х55х102</div>
                                <div class="swiper__slide__inner__list swiper__slide__inner__list-last"><b>Плотность:</b>
                                    D500</div>

                                <button class="swiper__slide__inner__addbasket" type="button">Добавить в корзину</button>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__slide__inner">
                                <svg class="header__inner__widgets__favorites swiper__slide__inner__favourites" data-heart>
                                    <use xlink:href="#favorites"></use>
                                </svg>
                                <a href="./products.html"><img class="swiper__slide__inner__image" src="<?php bloginfo('template_url'); ?>/assets/images/catalog/Catalog.png" alt="block"></a>
                                <a href="./products.html">
                                    <h5 class="swiper__slide__inner__title">Блок стандартный</h5>
                                </a>
                                <span class="swiper__slide__inner__price">9 900р.</span>
                                <span class="swiper__slide__inner__info">ГОСТ 33929-2016</span>


                                <div class="swiper__slide__inner__list"><b>Назначение:</b> специализируется на производстве
                                    и продаже</div>
                                <div class="swiper__slide__inner__list"><b>Размер:</b> 125х55х102</div>
                                <div class="swiper__slide__inner__list swiper__slide__inner__list-last"><b>Плотность:</b>
                                    D500</div>

                                <button class="swiper__slide__inner__addbasket" type="button">Добавить в корзину</button>
                            </div>
                        </div>

                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev swiper-catalog-prev">
                        <svg>
                            <use xlink:href="#prev"></use>
                        </svg>
                    </div>
                    <div class="swiper-button-next swiper-catalog-next">
                        <svg>
                            <use xlink:href="#next"></use>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="testing" id="testing" style="background-image: url(<?php the_field('testing__background', 7); ?>);" data-trigger>
        <div class="container container-main">
            <div class="testing__inner">
                <h1 class="testing__inner__title">Документы и испытания</h1>
                <div class="testing__inner__documents">

                    <!-- цикл на добавление постов для десктопной версии -->
                    <?php
                    $args = array(
                        'post_type' => 'Documents & testing',
                        'posts_per_page' => 4,
                        'category' => 17
                    );
                    $the_query = new WP_Query($args); ?>

                    <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <div class="testing__inner__documents__item"><?php the_field('document_pdf'); ?></div>
                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    <?php endif; ?>

                </div>


                <!-- цикл на добавление записей для слайдера -планшетная и мобильная версия -->
                <div class="testing__inner__slider__mobile">
                    <!-- Slider main container -->
                    <div class="swiper swiper__testing">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php
                            $args = array(
                                'post_type' => 'Documents & testing',
                                'posts_per_page' => 4,
                                'category' => 17
                            );
                            $the_query = new WP_Query($args); ?>

                            <?php if ($the_query->have_posts()) : ?>

                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                    <div class="swiper-slide">
                                        <div class="testing__inner__documents__item"><?php the_field('document_pdf'); ?></div>
                                    </div>

                                <?php endwhile; ?>

                                <?php wp_reset_postdata(); ?>

                            <?php endif; ?>

                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev testing-button-prev">
                            <svg>
                                <use xlink:href="#prev"></use>
                            </svg>
                        </div>
                        <div class="swiper-button-next testing-button-next">
                            <svg>
                                <use xlink:href="#next"></use>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="testing__inner__tests">

                    <!-- цикл на добавление видео -->

                    <?php
                    $argsvideo = array(
                        'post_type' => 'D&T-video',
                        'posts_per_page' => 3,
                        'category' => 18
                    );
                    $the_queryvideo = new WP_Query($argsvideo); ?>

                    <?php if ($the_queryvideo->have_posts()) : ?>

                        <?php while ($the_queryvideo->have_posts()) : $the_queryvideo->the_post(); ?>

                            <div class="testing__inner__tests__item">
                                <div class="adventages__video__container testing__inner__tests__item__container">
                                    <div class="testing__inner__tests__item__container__video" data-playtest><?php the_field('video_test'); ?></div>
                                    <div class="testing__inner__tests__item__container__present">
                                        <!-- <img class="testing__inner__tests__item__container__present__bg" src="<?php the_field('player_play'); ?>" alt="play"> -->
                                        <h6><?php the_field('testing_on'); ?></h6>
                                    </div>
                                </div>
                            </div>


                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container container-main">
            <div class="about__inner">
                <h1 class="about__inner__title">Кто мы и чем занимаемся</h1>
                <div class="about__inner__wrapper">
                    <div class="about__inner__wrapper__item">
                        <h3 class="about__inner__wrapper__item__title" id="about__us"><?php the_field('about_title_left', 7); ?></h3>
                        <hr class="about__inner__wrapper__item__line">
                        <span class="about__inner__wrapper__item__text"><?php the_field('about_left_text', 7); ?> </span>
                        <img src="<?php the_field('about_img_left', 7); ?>" alt="" class="about__inner__wrapper__item__image">
                        <!-- style="background-image: url(./assets/images/about/about1.png);" -->
                    </div>
                    <div class="about__inner__wrapper__item">
                        <h3 class="about__inner__wrapper__item__title"><?php the_field('about_right_title', 7); ?></h3>
                        <hr class="about__inner__wrapper__item__line large">
                        <span class="about__inner__wrapper__item__text"><?php the_field('about_right_text', 7); ?> </span>
                        <img src="<?php the_field('about_right_img', 7); ?>" alt="" class="about__inner__wrapper__item__image">
                        <!-- style="background-image: url(./assets/images/about/about2.png);" -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="callback">
        <div class="container container-main">
            <div class="callback__inner">
                <h1 class="callback__inner__title">Связаться с нами</h1>
                <div class="callback__inner__wrapper">
                    <div class="callback__inner__parttop">
                        <div class="callback__inner__wrapper__img">
                            <img src="<?php the_field('imageleft_calback', 7)?>" alt="polisterol" class="callback__inner__wrapper__img__left">
                        </div>

                        <?php  echo do_shortcode('[contact-form-7 id="151" title="Связаться с нами"]') ?>
            
                    </div>
                    <h2 class="callback__inner__wrapper__title">Общество с ограниченной ответственностью «Газовая служба 60»
                    </h2>
                    <div class="callback__inner__part__bottom">
                        <div class="callback__inner__wrapper__bottom__left">
                            <dl class="callback__inner__wrapper__datalist">
                                <dt>Юридический адрес</dt>
                                <dd> <?php the_field('Ur_adress', 7)?> </dd>
                            </dl>
                            <dl class="callback__inner__wrapper__datalist">
                                <dt>Телефон</dt>
                                <dd><a href="tel:<?php the_field('tel_callback1', 7)?>"><?php the_field('tel_site', 7)?></a> <a href="tel:<?php the_field('tel_callback2', 7)?>"><?php the_field('tel_site2', 7)?></a></dd>
                            </dl>
                            <a href="<?php the_field('href_rusprofail', 7)?>', 7)?>" class="calback__inner__wrapper__datalist__profile"><b>Профиль организации на
                                    сайте </b>Руспрофайл</a>
                        </div>
                        <div class="callback__inner__wrapper__bottom__right">
                            <dl class="callback__inner__wrapper__datalist">
                                <dt>ИНН/КПП</dt>
                                <dd><?php the_field('INN/KPP', 7)?></dd>
                            </dl>
                            <dl class="callback__inner__wrapper__datalist">
                                <dt>ОГРН</dt>
                                <dd><?php the_field('OGRN', 7)?></dd>
                            </dl>
                        </div>
                        <ul class="calback__inner__part__bottom__info">
                            <li class=" calback__inner__part__bottom__info__title">Юридический адрес</li>
                            <li class="calback__inner__part__bottom__info__text"><?php the_field('Ur_adress', 7)?></li>
                            <li class="calback__inner__part__bottom__info__title">Телефон</li>
                            <li class="calback__inner__part__bottom__info__text"><a href="tel:<?php the_field('imageleft_calback1', 7)?>"><?php the_field('tel_site', 7)?></a> 
                            <a href="tel:<?php the_field('tel_callback2', 7)?>"><?php the_field('tel_callback2', 7)?></a>
                            + 7 (953)-230-81-86
                            </li>
                            <li class="calback__inner__part__bottom__info__title">ИНН/КПП</li>
                            <li class="calback__inner__part__bottom__info__text"><?php the_field('INN/KPP', 7)?></li>
                            <li class="calback__inner__part__bottom__info__title">ОГРН</li>
                            <li class="calback__inner__part__bottom__info__text"><?php the_field('OGRNtel:', 7)?>12160000017552</li>
                        </ul>
                    </div>
                    <a class="calback__inner__wrapper__datalist__profile calback__inner__wrapper__datalist__profile__mobile" href="<?php the_field('href_rusprofail', 7)?>"><b>Профиль организации на
                            сайте </b>Руспрофайл</a>

                </div>
            </div>
        </div>
    </section>

    <section class="modalcall fix__block" id="modal">
        <div class="container__modalcall">
            <div class="modalcall__inner">
                <div class="modallcall__inner__close">
                    <svg class="modal__close" id="modalClose">
                        <use xlink:href="#close"></use>
                    </svg>
                </div>
                <h1 class="modallcall__inner__title">Выберите удобный способ связи для вас </h1>
                <div class="modallcall__inner__wrapper">
                    <a href="tel:<?php the_field('modal_cal_tel', 7)?>" class="modallcall__inner__wrapper__button" target="_blank">Сделать звонок</a>
                    <button class="modallcall__inner__wrapper__button" id="makeorder">Оставить заявку</button>
                </div>
                <div class="modallcall__inner__connection">
                    <h6 class="modallcall__inner__conection__title">Связаться через</h6>
                    <div class="modallcall__inner__connection__container">
                        <a href="tg://<?php the_field('modal_cal_telegram', 7)?>" target="_blank" class="modallcall__inner__connection__container__item__link">
                            <svg>
                                <use xlink:href="#telegram"></use>
                            </svg>
                            <b>Telegram</b>
                        </a>
                        <a href="https://wa.me/<?php the_field('modal_cal_whatsapp', 7)?>" target="_blank" class="modallcall__inner__connection__container__item__link">
                            <svg class="green">
                                <use xlink:href="#whatsapp"></use>
                            </svg>
                            <b class="green">Whatsapp</b>
                        </a>
                    </div>
                </div>
                <span class="modalcall__inner__agreement">Оставляя заявку вы соглашаетесь с <a href=""> политикой
                        конфиденциальности</a></span>
            </div>
        </div>
    </section>
    <div class="modal" id="modalCallback">
        <div class="container__small">
            <div class="modal__inner">
                <div class="modal__inner__close">
                    <svg id="modalcallbackClose">
                        <use xlink:href="#close"></use>
                    </svg>
                </div>
                <h3 class="modal__inner__title">Оставьте заявку и мы свяжемся с вами в ближайшее время</h3>

                <?php  echo do_shortcode('[contact-form-7 id="168" title="Оставить заявку" html_class="modal__inner__form"]') ?>
                
                <div class="modal__inner__text">Оставляя заявку вы соглашаетесь с
                    <a href="" class="modal__inner__text__politics" target="_blank">политикой конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>