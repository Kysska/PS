<?php
require_once '../connect.php';
session_start();
// if(!isset($_SESSION['cart'])){
//   $_SESSION['cart'] = array();
//   $_SESSION['total_items'] =0;
//   $_SESSION['total_price'] = '0.00';
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PET STORE</title>
    <link href="/static/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo_sqad.ico">
    <link rel="stylesheet" type="text/css" href="/libs/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/libs/slick/slick-theme.css"/>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
    <script src = "/js/jquery.js"></script>
  </head>
  <body>

    <div class="wrapper">
    <div class="header">


<div class="tabs">
  <div class="inner">
    <div class="geo">
      <div class="plane">
      <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12.8984 12.9055L12.7653 12.4909L12.3711 12.3058L6.01004 9.31998L6.00835 9.31918L3.27032 8.02773L24.6499 1.67792L16.2217 22.4635L14.8842 19.0941L12.8984 12.9055Z" stroke="#1E1E1F" stroke-width="2"/>
      </svg> 
      </div>
    <span class="city">Vladivostok</span>
    </div>

    <div class="logo">
      <a href="/index.php">
      <svg width="75" height="51" viewBox="0 0 75 51" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M19.6357 1.13766H0V20.1092C0.775655 19.3186 1.59434 18.5257 2.46868 17.7318C3.84607 16.4811 5.40888 15.1982 6.44681 14.3608C7.48453 13.5229 7.99719 13.13 8.33908 12.932C8.68076 12.7333 8.85171 12.7294 9.56964 12.0957C10.2874 11.4619 11.5521 10.1983 12.7951 9.05641C14.0379 7.91411 15.2591 6.89311 16.0915 6.32844C16.924 5.76337 17.3679 5.65426 17.5045 5.69702C17.6411 5.73956 17.4704 5.93397 17.0294 6.63813C16.5883 7.34228 15.8768 8.55636 15.2762 9.63213C14.6757 10.7079 14.1858 11.6455 14.0264 12.1441C13.8672 12.6423 14.0383 12.7019 14.4881 12.9194C14.9379 13.1368 15.6662 13.5127 16.2042 13.9745C16.7417 14.4362 17.0883 14.984 17.4553 15.6402C17.8223 16.2964 18.2094 17.0607 18.4598 17.6873C18.71 18.3137 18.8236 18.8023 18.8425 19.1401C18.8611 19.4778 18.7849 19.6643 18.9476 20.0467C19.1102 20.429 19.5115 21.0064 19.9587 21.6831C20.4055 22.3596 20.8981 23.1349 21.4511 24.0447C22.0039 24.9541 22.6172 25.998 22.9877 26.7027C23.3583 27.4073 23.4864 27.7729 23.4994 28.006C23.5127 28.2392 23.4108 28.3401 22.7742 28.6062C22.1377 28.8722 20.9666 29.3034 20.2553 29.4951C19.544 29.6865 19.2928 29.6385 18.7155 29.3092C18.1379 28.9798 17.2341 28.3694 16.52 27.8071C15.8057 27.2447 15.2807 26.7309 14.767 26.3307C14.253 25.9303 13.7502 25.644 13.1638 25.3838C12.5774 25.1236 11.9072 24.8897 11.41 24.6759C10.9128 24.4622 10.5887 24.2688 10.1521 24.3794C9.71529 24.4899 9.16587 24.9044 8.67965 25.7003C8.19304 26.4959 7.76945 27.6727 7.52473 29.2274C7.27983 30.7823 7.21397 32.7156 5.29963 36.8229C3.57021 40.5332 1.75812 43.2303 0 45.0719V48.9086H12.6577V35.6692H19.6357C29.5423 35.6692 36.8862 28.3898 36.8862 18.3694C36.8862 8.36019 29.5423 1.13766 19.6357 1.13766ZM56.3626 50.6171C67.1788 50.6171 75 45.2031 75 34.7845C75 23.8996 66.0409 21.5357 59.1804 19.7481C54.7817 18.6021 51.2374 17.7348 51.2374 15.028C51.2374 12.7987 53.4451 11.7864 55.7524 11.7864C58.426 11.7864 60.6337 13.1966 60.6337 16.2109H73.4802C73.4802 6.49732 67.0902 0.617081 55.9077 0.617081C44.8919 0.617081 38.1468 6.00829 38.1468 15.4147C38.1468 26.2653 46.6728 28.7018 53.4894 30.0871C60.553 31.5227 54.4434 40.0955 50.8491 34.0452H37.6032C37.6032 44.4411 44.9805 50.6171 56.3626 50.6171Z" fill="#1E1E1F"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M56.027 29.4663C55.8279 29.1754 55.6115 28.8586 55.4226 28.5964C55.2337 28.3342 55.0723 28.1266 54.773 27.9548C54.4737 27.7828 54.0365 27.6464 53.6741 27.6526C53.3116 27.6589 53.0241 27.8076 52.7237 28.0871C52.4234 28.3666 52.1102 28.777 51.9064 29.1381C51.7027 29.4991 51.6081 29.8109 51.5565 30.1432C51.505 30.4756 51.4964 30.8283 51.4959 31.1373C51.4954 31.4463 51.5031 31.7117 51.4189 31.975C51.3347 32.2383 51.1587 32.4995 50.9514 32.7399C50.7441 32.9804 50.5055 33.2002 50.3417 33.3959C50.1779 33.5916 50.0886 33.7632 50.0605 34.0949C50.0324 34.4265 50.0657 34.9179 50.1385 35.3212C50.2114 35.7245 50.3242 36.0399 50.5381 36.2723C50.752 36.5047 51.0672 36.6545 51.4853 36.7818C51.9034 36.9091 52.4244 37.0138 52.8666 36.9979C53.3088 36.9821 53.6722 36.8455 53.9973 36.6907C54.3225 36.536 54.6094 36.3631 54.976 36.2577C55.3426 36.1525 55.7889 36.1146 56.2425 36.0863C56.6962 36.058 57.157 36.0392 57.4434 36.0088C57.7299 35.9783 57.8416 35.9363 57.9925 35.782C58.1435 35.6277 58.3335 35.3612 58.5271 34.9714C58.7206 34.5817 58.9177 34.0687 59.0514 33.6446C59.1851 33.2204 59.2553 32.8852 59.2101 32.6258C59.165 32.3664 59.0043 32.1831 58.7759 31.9439C58.5478 31.7045 58.2519 31.4094 57.8762 31.1239C57.5007 30.8384 57.0454 30.5627 56.7267 30.2923C56.4081 30.022 56.2262 29.7572 56.027 29.4663Z" fill="white"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M61.0847 28.9017C61.0811 28.6146 60.9765 28.2556 60.7851 27.909C60.5938 27.5625 60.3157 27.228 60.0336 27.0049C59.7517 26.7817 59.466 26.6698 59.1028 26.6519C58.7397 26.634 58.2994 26.7101 57.9334 26.8395C57.5675 26.969 57.2761 27.1518 57.0698 27.4284C56.8636 27.705 56.7425 28.0757 56.7129 28.4363C56.6834 28.7969 56.7453 29.1475 56.8489 29.3929C56.9526 29.6384 57.098 29.7788 57.4643 29.9052C57.8305 30.0316 58.4177 30.1442 58.9183 30.1917C59.4189 30.2393 59.8327 30.2217 60.1474 30.1156C60.4623 30.0095 60.6779 29.8146 60.8344 29.6095C60.9909 29.4043 61.0883 29.1888 61.0847 28.9017Z" fill="white"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M60.2085 33.7663C60.4276 34.0131 60.7749 34.297 61.0466 34.4915C61.3183 34.686 61.5144 34.791 61.8077 34.7579C62.1011 34.7248 62.4918 34.5537 62.8314 34.3286C63.171 34.1033 63.4595 33.8241 63.6311 33.5726C63.8028 33.3211 63.8576 33.0974 63.8315 32.8471C63.8054 32.5968 63.6985 32.3201 63.5518 32.0542C63.4052 31.7882 63.2188 31.5333 63.0123 31.3103C62.8057 31.0872 62.5788 30.8961 62.2164 30.8251C61.8541 30.7541 61.3564 30.803 60.9827 30.9109C60.6092 31.019 60.3598 31.1858 60.1793 31.3796C59.999 31.5734 59.8877 31.7941 59.8372 32.0853C59.7869 32.3766 59.7974 32.7384 59.848 33.0242C59.8987 33.3099 59.9895 33.5194 60.2085 33.7663Z" fill="white"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M57.3858 40.479C57.1698 40.6618 56.835 40.812 56.4534 40.8864C56.0718 40.9608 55.6431 40.9594 55.2948 40.8831C54.9465 40.8069 54.6784 40.6557 54.4303 40.3831C54.1823 40.1107 53.9543 39.717 53.814 39.3471C53.6738 38.9772 53.6214 38.6311 53.6939 38.2909C53.7665 37.9508 53.964 37.6164 54.2132 37.3602C54.4625 37.104 54.7634 36.9257 55.013 36.8481C55.2627 36.7705 55.4612 36.7935 55.792 36.9983C56.1229 37.2031 56.5863 37.5896 56.9452 37.9504C57.3042 38.3112 57.5587 38.6463 57.6831 38.9611C57.8077 39.276 57.8021 39.5707 57.7506 39.8257C57.6991 40.0807 57.6017 40.2962 57.3858 40.479Z" fill="white"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M60.0254 35.6342C60.3507 35.646 60.7865 35.7342 61.1069 35.821C61.4272 35.9077 61.6322 35.9933 61.7971 36.2441C61.9622 36.495 62.0874 36.9112 62.1394 37.3224C62.1913 37.7337 62.17 38.1398 62.0938 38.4366C62.0177 38.7335 61.8866 38.921 61.6834 39.0624C61.4804 39.2038 61.2053 39.299 60.9126 39.3562C60.62 39.4135 60.3098 39.4325 60.0103 39.4151C59.7107 39.3976 59.4218 39.3437 59.1347 39.1062C58.8477 38.8687 58.5623 38.4478 58.4011 38.0857C58.24 37.7236 58.2029 37.4207 58.2305 37.1542C58.2581 36.8879 58.3504 36.6581 58.5345 36.4304C58.7186 36.2028 58.9947 35.9771 59.2401 35.8319C59.4854 35.6868 59.7001 35.6224 60.0254 35.6342Z" fill="white"/>
      </svg>
      </a>
    </div>

    <div class="search" id="search">
      <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="11.25" cy="11.25" r="10.25" stroke="#1E1E1F" stroke-width="2"/>
      <line x1="19.6071" y1="18.1929" x2="27.7071" y2="26.2929" stroke="#1E1E1F" stroke-width="2"/>
      </svg>
    </div>

    <div class="customer">
      <a href="/personal_account.php">
        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.5 9.32143C17.5 11.398 15.7437 13.1429 13.5 13.1429C11.2563 13.1429 9.5 11.398 9.5 9.32143C9.5 7.24488 11.2563 5.5 13.5 5.5C15.7437 5.5 17.5 7.24488 17.5 9.32143Z" stroke="#1E1E1F" stroke-width="2"/>
        <path d="M22.5 23.1C20.25 19.8 18.4706 17.1 13.5 17.1C8.52944 17.1 7.2 19.8 4.5 23.1" stroke="#1E1E1F" stroke-width="2"/>
        <circle cx="13.5" cy="13.5" r="12.5" stroke="#1E1E1F" stroke-width="2"/>
        </svg>
      </a>
    </div>

    <div class="cart">
      <a href="/cart.php">
        <svg width="27" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1" y="7.78572" width="27" height="19.2143" stroke="#1E1E1F" stroke-width="2"/>
        <path d="M19 8.71429C19 4.4538 16.7614 1 14 1C11.2386 1 9 4.4538 9 8.71429" stroke="#1E1E1F" stroke-width="2"/>
        </svg>
      </a>
    </div>

  </div>
</div>
<div class="line" id="header_line"></div>
</div>


<div class="nav">
  <div class="inner">
    <ul class="menu">
      <li class="menu_catalog">
        <span class="catalog">catalog</span>
        <div class="underline_catalog"></div>
        <div class="bg">
          
          <ul class="sub_catalog-list">
            <div class="line_c"></div>
            <li>
              <a href="/kernel/catalog.php?catid=all" class="sub_catalog-link">all</a>
            </li>
            <li>
              <div class="feed_group">
                <div class="feed_hover">

                  <a href="/kernel/feed.php?catid=fooddog" class="sub_catalog-link_feed">feed</a>
                  <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.85547 2L8.71082 8.85535L1.85547 15.7107" stroke="black" stroke-width="3"/>
                  </svg>

                  <div class="feed_group_links">
                    <div class="feed_bridge"></div>
                    <ul class="sub-sub_catalog-list">
                      <div class="sub-sub_list_div">
                      <div>
                      <li>
                        <a href="/kernel/feed.php?catid=fooddog" class="sub-sub_catalog-link">for dogs</a>
                      </li>
                      </div>
                      <div>
                      <li>
                        <a href="/kernel/feed.php?catid=foodcat" class="sub-sub_catalog-link">for cats</a>
                      </li>
                      </div>
                      <div>
                      <li>
                        <a href="/kernel/feed.php?catid=foodroddent" class="sub-sub_catalog-link">for rodents</a>
                      </li>
                      </div>
                      <div>
                      <li>
                        <a href="/kernel/feed.php?catid=foodparrot" class="sub-sub_catalog-link">for parrots</a>
                      </li>
                      </div>
                      <div>
                      <li>
                        <a href="/kernel/feed.php?catid=foodother" class="sub-sub_catalog-link">for others</a>
                      </li>
                      </div>
                      </div>
                    </ul>
                 
                  
                 </div>
                </div>
              </div>


            </li>
            <li>
              <a href="/kernel/feed.php?catid=beuty" class="sub_catalog-link">beauty</a>
            </li>
            <li>
              <a href="/kernel/feed.php?catid=grooming" class="sub_catalog-link">grooming</a>
            </li>
            <li>
              <a href="/kernel/feed.php?catid=bowls" class="sub_catalog-link">bowls</a>
            </li>
            <li>
              <a href="/kernel/feed.php?catid=clothes" class="sub_catalog-link">clothes</a>
            </li>
            <li>
              <a href="/kernel/feed.php?catid=collars" class="sub_catalog-link">collars and leashes</a>
            </li>
            <li>
              <a href="/kernel/feed.php?catid=toy" class="sub_catalog-link">toys</a>
            </li>
            <li>
              <a href="/kernel/feed.php?catid=bed" class="sub_catalog-link">beds and carriers</a>
            </li>
            <li>
              <a href="/kernel/feed.php?catid=cage" class="sub_catalog-link">cages</a>
            </li>

          </ul>
        </div>
      </li>
      <li class="menu_sale"><a href="/sale.php" class="sale">sale</a>
        <div class="underline_sale"></div>
      </li>
      <li class="menu_about_us"><a href="/about.php" class="about_us">about us</a>
        <div class="underline_about_us"></div>
      </li>
      <li class="menu_help"><a href="/help.php" class="help">help</a>
        <div class="underline_help"></div>
      </li>
    </ul>
    <div class="line"></div>
  </div>
</div>

        <div class="search_input" id="search_input">
          <div class="bg">
            <div class="forma_icon">
              <input class="search_input-s" type="text" placeholder="Search">
              <button class="search_button">
                <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="11.25" cy="11.25" r="10.25" stroke="#1E1E1F" stroke-width="2"/>
                <line x1="19.6075" y1="18.1929" x2="27.7075" y2="26.2929" stroke="black" stroke-width="2"/>
                </svg>
              </button>
            </div>
          </div>
        </div>


      <div class="main_picture">
        <div class="main_picture-img" style="background-image: url(/img/main_picture_news.jpg)"></div>
      </div>
      <div class="container_contents">
        <div class="content_replacer" id="content_replacer"></div>
        <div class="content_right" id="content_right">
          <div class="breadcrumb">
          </div>

          <ul class="categories">

            <li>
              <a href="./product.php?catid=all" class="sub_catalog-link">all</a>
            </li>
            <li>
              <a href="./product.php?catid=fooddog" class="sub_catalog-link">feed dog</a>
            </li>
            <li>
              <a href="./product.php?catid=foodcat" class="sub_catalog-link">feed cat</a>
            </li>
            <li>
              <a href="./product.php?catid=foodroddent" class="sub_catalog-link">feed roddent</a>
            </li>
            <li>
              <a href="./product.php?catid=foodparrot" class="sub_catalog-link">feed parrot</a>
            </li>
            <li>
              <a href="./product.php?catid=foodother" class="sub_catalog-link">feed other</a>
            </li>
            <li>
              <a href="./product.php?catid=beuty" class="sub_catalog-link">beauty</a>
            </li>
            <li>
               <a href="./product.php?catid=grooming" class="sub_catalog-link">grooming</a>
            </li>
            <li>
              <a href="./product.php?catid=bowls" class="sub_catalog-link">bowls</a>
            </li>
            <li>
              <a href="./product.php?catid=clothes" class="sub_catalog-link">clothes</a>
            </li>
            <li>
              <a href="./product.php?catid=collars" class="sub_catalog-link">collars and leashes</a>
            </li>
            <li>
              <a href="./product.php?catid=toy" class="sub_catalog-link">toys</a>
            </li>
            <li>
              <a href="./product.php?catid=bed" class="sub_catalog-link">beds and carriers</a>
            </li>
            <li>
              <a href="./product.php?catid=cage" class="sub_catalog-link">cages</a>
            </li>

          </ul>
        </div>
        <?php
        $per_cat = $_GET['catid']; 
        if($per_cat == 'all'){
          $prepare = $connect->prepare("SELECT * FROM products WHERE `tobe` = 1");
          $prepare->execute();
          $title = 'all';
        }
        else{ 
        $prepare1 = $connect->prepare("SELECT * FROM categorys WHERE `cat_id` = ?");
        $prepare1->execute([$per_cat]);
        $row1 = $prepare1->fetch(PDO::FETCH_ASSOC);
        $title = $row1['name'];
        $prepare = $connect->prepare("SELECT * FROM products WHERE `tobe` = 1 AND `category` = ?");
        $prepare->execute([$row1['name']]);
       
        }
       $row = $prepare->fetchAll(PDO::FETCH_ASSOC);
       ?>
        <div class="content_left">
          <div class="content_left-item">
            <div class="header_categories"><?=$title?></div>
            <div class="sort"></div>
            <div class="products">
            <?foreach($row as $item):?>
                <div class="products-item_card" id = "<?=$item['id']?>">

                  <div class="item_card-labelsale">
                    
                  </div>
                  <a class="btn-ref" id = "<?=$item['id']?>">
                  <a class="item_card-img" id = "<?=$item['id']?>" href="productred.php?id=<?=$item['id']?>"><img class="item_card-img" src="../imageanimals/<?=$item['image']?>"></a>
                  <a class="item_card-details" id = "<?=$item['id']?>" href="productred.php?id=<?=$item['id']?>">
                    <div class="type">TYPE OF PRODUCT</div>
                    <div class="full_name">
                      <span class="brand"><?=$item['title']?></span>
                    </div>
                    <div>
                      <span class="name"><?=$item['description']?></span>
                    </div>
                    <div class="cmp-btn"><a class = "clickbtn" href="productred.php?id=<?=$item['id']?>" id = "<?=$item['id']?>" >Редактировать</a></div>
                    <div class="cmp-btn"><button class = "clickbtn btn-del" id = "<?=$item['id']?>"  >Удалить</button></div>
                    <div class="price"><?=$item['price']?></div>
                    <?php
                    if($item['tobe'] == 1){
                   echo("Товар не скрыт");
                   } else echo("Товар скрыт");?>
                  </a>
                  </a>

                </div>
                <?endforeach?>


            </div>
          </div>
        </div>

      </div>
        <div class="space" style="height: 40px; width: 100%"></div>


    </div>
    
    <script type="text/javascript" src="/libs/slick/slick.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script>
        $('.btn-del').click(function () { //клик на кнопку     
        console.log("1");
        var id = $(this).attr('id'); //получаем id товара
            $.ajax({//аякс-запрос
            type: "POST",//метод
            url: '/kernel/admin/productdelete.php',//куда передаем
            data: {id_prod: id},//данные
            success: function(data) {//получаем результат
                    console.log("2");
                    $('div#'+id).css('display', 'none');//скрываем строку таблицы
                }
            });
        });
        $('.btn-ref').click(function () { //клик на кнопку     
        console.log("1");
        var id = $(this).attr('id'); //получаем id товара
            $.ajax({//аякс-запрос
            type: "POST",//метод
            url: '/kernel/admin/productredlogic.php',//куда передаем
            data: {id_prod: id},//данные
            success: function(data) {//получаем результат
                }
            });
        });
</script>
  </body>
</html>