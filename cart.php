<? session_start();
require_once('./kernel/connect.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PET STORE</title>
    <link href="static/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo_sqad.ico">
    <link rel="stylesheet" type="text/css" href="libs/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css"/>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
    <script src = "./js/jquery.js"></script>
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
              <a href="./index.php">
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
              <a href="./personal_account.php">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.5 9.32143C17.5 11.398 15.7437 13.1429 13.5 13.1429C11.2563 13.1429 9.5 11.398 9.5 9.32143C9.5 7.24488 11.2563 5.5 13.5 5.5C15.7437 5.5 17.5 7.24488 17.5 9.32143Z" stroke="#1E1E1F" stroke-width="2"/>
                <path d="M22.5 23.1C20.25 19.8 18.4706 17.1 13.5 17.1C8.52944 17.1 7.2 19.8 4.5 23.1" stroke="#1E1E1F" stroke-width="2"/>
                <circle cx="13.5" cy="13.5" r="12.5" stroke="#1E1E1F" stroke-width="2"/>
                </svg>
              </a>
            </div>

            <div class="cart">
              <a href="./cart.php">
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

      <a class="message_link" href="#">
      <div class="message">
        <span class="text_message">Free shipping and <span class="percent">10%</span> discount on first order</span>
      </div>
      </a>
      <div class="content">

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
                      <a href="./kernel/catalog.php?catid=all" class="sub_catalog-link">all</a>
                    </li>
                    <li>
                      <div class="feed_group">
                        <div class="feed_hover">

                          <a href="#" class="sub_catalog-link_feed">feed</a>
                          <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.85547 2L8.71082 8.85535L1.85547 15.7107" stroke="black" stroke-width="3"/>
                          </svg>

                          <div class="feed_group_links">
                            <div class="feed_bridge"></div>
                            <ul class="sub-sub_catalog-list">
                              <div class="sub-sub_list_div">
                              <div>
                              <li>
                                <a href="./kernel/feed.php?catid=fooddog" class="sub-sub_catalog-link">for dogs</a>
                              </li>
                              </div>
                              <div>
                              <li>
                                <a href="./kernel/feed.php?catid=foodcat" class="sub-sub_catalog-link">for cats</a>
                              </li>
                              </div>
                              <div>
                              <li>
                                <a href="./kernel/feed.php?catid=foodroddent" class="sub-sub_catalog-link">for rodents</a>
                              </li>
                              </div>
                              <div>
                              <li>
                                <a href="./kernel/feed.php?catid=foodparrot" class="sub-sub_catalog-link">for parrots</a>
                              </li>
                              </div>
                              <div>
                              <li>
                                <a href="./kernel/feed.php?catid=foodother" class="sub-sub_catalog-link">for others</a>
                              </li>
                              </div>
                              </div>
                            </ul>
                         
                          
                         </div>
                        </div>
                      </div>


                    </li>
                    <li>
                      <a href="./kernel/catalog.php?catid=beuty" class="sub_catalog-link">beauty</a>
                    </li>
                    <li>
                      <a href="./kernel/catalog.php?catid=grooming" class="sub_catalog-link">grooming</a>
                    </li>
                    <li>
                      <a href="./kernel/catalog.php?catid=bowls" class="sub_catalog-link">bowls</a>
                    </li>
                    <li>
                      <a href=" ./kernel/catalog.php?catid=clothes" class="sub_catalog-link">clothes</a>
                    </li>
                    <li>
                      <a href="./kernel/catalog.php?catid=collars" class="sub_catalog-link">collars and leashes</a>
                    </li>
                    <li>
                      <a href="./kernel/catalog.php?catid=toy" class="sub_catalog-link">toys</a>
                    </li>
                    <li>
                      <a href="./kernel/catalog.php?catid=bed" class="sub_catalog-link">beds and carriers</a>
                    </li>
                    <li>
                      <a href="./kernel/catalog.php?catid=cage" class="sub_catalog-link">cages</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu_sale"><a href="./sale.php" class="sale">sale</a>
                <div class="underline_sale"></div>
              </li>
              <li class="menu_about_us"><a href="./about.php" class="about_us">about us</a>
                <div class="underline_about_us"></div>
              </li>
              <li class="menu_help"><a href="./help.php" class="help">help</a>
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

<!-- КОРЗИНКА -->
      <div class="cart_container">
        <div class="cart_header">your cart</div>
        <div class="cart_information">
          <button class="free_shipping">CLEAR</button>
          <div class="product_list" id = "free_shipping">
            <?php
            if(!isset($_SESSION['cart'])){
            }
            else{
          foreach($_SESSION['cart'] as $id => $item):
          $prepare = $connect->prepare("SELECT * FROM products WHERE `id` = ?");
          $prepare->execute([$id]);
          $product = $prepare->fetch(PDO::FETCH_ASSOC);
          ?>
            <div class="product_info_card" id = "<?=$product['id']?>"> 
                <div class="card_img"><img class="card_img" src = "./kernel/imageanimals/<?=$product['image']?>"></div>
                <div class="card_info">
                  <div class="type">TYPE</div> 
                  <div class="full_name">  
                    <div class="brand"><?=$product['title']?></div>  
                    <div class="name"><?=$product['description']?></div> 
                    <div class="type" id = "oneprice"><?=$product['price']?></div> 
                  </div> 
                  <div class="calc" id = "<?=$product['id']?>">
                    <span class="decrement" id = "<?=$id?>" >-</span>
                    <input id = "<?=$product['id']?>" type="number" name="calc" class="number" value="<?=$item?>" min="1" max="99">
                    <span class="increment" id = "<?=$id?>" >+</span>
                </div>
                </div>
                <div class="delite_and_price">
                  <div class="delete" id = "<?=$product['id']?>">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4 8L6.2053 25.3777C6.39551 26.8765 7.67047 28 9.18129 28C13.2694 28 17.963 28 20.8194 28C22.3302 28 23.6038 26.8766 23.794 25.3778L26 8" stroke="#8B8B8B" stroke-width="2"/>
                      <path d="M19 1H11V4H19V1Z" stroke="#8B8B8B" stroke-width="2" stroke-linejoin="round"/>
                      <path d="M5 8H2C1.44772 8 1 7.55228 1 7V5C1 4.44772 1.44772 4 2 4H28C28.5523 4 29 4.44772 29 5V7C29 7.55228 28.5523 8 28 8H25" stroke="#8B8B8B" stroke-width="2"/>
                    </svg>
                    </div> 
                  <div class="price" id = "<?=$product['id']?>"><?=$product['price'] * $item?></div> 
                  <div > ₽</div> 
                </div>    
            </div> 
          <?endforeach;}?>

          </div>
          <div class="line"></div>
          <!-- <div class="subtotal">  
              <div class="subtotal_text">Subtotal</div>
              <div class="count_items"> 
                  <div class="count"><?=$_SESSION['total_count']?></div>
                  <div class="item">ITEM</div>
              </div>
              <div class="subtotal_price-box">
                  <div class="subtotal_price">SUB PRICE $</div>
              </div>
          </div> -->
          <div class="checkout">
            <button class="checkout_btn">CHECKOUT</button>
          </div>          
        </div>
        </div>
        
      </div>
      <section class="footer">
          <div class="line"></div>
          <div class="footer_menu">
            <div class="left_menu">
              <a href="./sale.php"><div>sale</div></a>
              <a href="./about.php"><div>about us</div></a>
              <a href="./kernel/catalog.php?catid=all"><div>shops</div></a>
              <a href="./help.php"><div>help</div></a>
            </div>
            <div class="middle_menu">

              <div class="logo">
                <a href="./index.php">
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
              <div class="text_ps">online store of pet products</div>

            </div>
            <div class="right_menu">
              <div class="customer_support">customer support service:</div>
              <div class="number">8 800 555 35 35</div>
              <div class="mail">clients@petstore.ru - department for communication with clients</div>
              <button>SIGN UP NOW</button>
              <div class="documents">
                <a class="terms_of_use" href="#"><div class="terms_of_use">terms of use</div></a>
                <a class="privacy_policy" href="#"><div class="privacy_policy">privacy policy</div></a>
              </div>
            </div>
          </div>
          <div class="social_media">
            <a class="link_social" href="#">
              <div class="social_icon">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.1396 30.3186C25.5502 30.6093 26.0792 30.6819 26.551 30.5034C27.0227 30.3237 27.3695 29.9208 27.474 29.4324C28.5819 24.2253 31.2696 11.0456 32.2781 6.30899C32.3546 5.95199 32.2271 5.58096 31.9466 5.34254C31.6661 5.10411 31.2773 5.03526 30.9305 5.16404C25.5845 7.14284 9.12085 13.3202 2.39155 15.8103C1.96444 15.9684 1.68649 16.379 1.70052 16.829C1.71582 17.2804 2.01925 17.6718 2.45658 17.8032C5.47443 18.7059 9.43577 19.9617 9.43577 19.9617C9.43577 19.9617 11.287 25.5526 12.2522 28.3959C12.3733 28.7529 12.6525 29.0334 13.021 29.1303C13.3882 29.2258 13.7809 29.1252 14.055 28.8663C15.6053 27.4026 18.0023 25.1395 18.0023 25.1395C18.0023 25.1395 22.5565 28.4787 25.1396 30.3186ZM11.1021 19.2553L13.2428 26.3163L13.7184 21.8449C13.7184 21.8449 21.9892 14.3849 26.704 10.1327C26.8417 10.0078 26.8609 9.79866 26.7461 9.65204C26.6325 9.50541 26.4235 9.47099 26.2667 9.57044C20.8021 13.0601 11.1021 19.2553 11.1021 19.2553Z" fill="white"/>
                </svg>
              </div>
            </a>

            <a class="link_social" href="#">
              <div class="social_icon">
                <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.7793 8.65767C27.9678 8.31327 15.0242 8.31468 9.22081 8.65767C2.93689 9.03007 2.19676 12.3256 2.14999 20.9999C2.19676 29.6588 2.93044 32.9684 9.22081 33.3422C15.0258 33.6852 27.9678 33.6864 33.7793 33.3422C40.0631 32.9697 40.8033 29.6742 40.85 20.9999C40.8033 12.341 40.0695 9.03148 33.7793 8.65767ZM16.6625 26.7272V15.2726L28.7562 20.9899L16.6625 26.7272Z" fill="white"/>
                </svg>
              </div>
            </a>

            <a class="link_social" href="#">
              <div class="social_icon">
                <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M42.0134 12.1464C42.3122 11.1975 42.0134 10.5 40.5907 10.5H35.8865C34.6903 10.5 34.1388 11.1024 33.8399 11.7667C33.8399 11.7667 31.4478 17.319 28.0586 20.9254C26.9623 21.9694 26.4639 22.3016 25.8658 22.3016C25.5667 22.3016 25.1339 21.9694 25.1339 21.0204V12.1464C25.1339 11.0074 24.7869 10.5 23.79 10.5H16.3976C15.6499 10.5 15.2004 11.0285 15.2004 11.5296C15.2004 12.6091 16.8949 12.8583 17.0696 15.8952V22.4914C17.0696 23.9377 16.7954 24.2 16.1973 24.2C14.6026 24.2 10.7233 18.6228 8.42258 12.2415C7.97164 11.001 7.51937 10.5 6.31711 10.5H1.61288C0.268812 10.5 0 11.1024 0 11.7667C0 12.953 1.59473 18.8374 7.42561 26.62C11.313 31.9347 16.79 34.8157 21.7739 34.8157C24.7641 34.8157 25.1339 34.1758 25.1339 33.0737V29.0569C25.1339 27.7769 25.4173 27.5218 26.3642 27.5218C27.0616 27.5218 28.2579 27.8538 31.0488 30.4162C34.2388 33.4534 34.7646 34.8157 36.5586 34.8157H41.2628C42.6068 34.8157 43.2789 34.1758 42.891 32.9131C42.467 31.6544 40.944 29.8284 38.9234 27.6641C37.8271 26.43 36.1821 25.1017 35.684 24.4371C34.9859 23.5828 35.1856 23.2031 35.684 22.4437C35.684 22.4437 41.4152 14.7566 42.0134 12.1464Z" fill="white"/>
                </svg>
              </div>
            </a>

            <a class="link_social" href="#">
              <div class="social_icon">
                <svg width="39" height="35" viewBox="0 0 39 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.25 3.82812H9.75C7.05778 3.82812 4.875 5.78703 4.875 8.20312V25.7031C4.875 28.1192 7.05778 30.0781 9.75 30.0781H20.1094V20.7812H16.4531V16.9531H20.1094V14.2188C20.1094 10.3906 22.5469 8.20312 26.2031 8.20312C28.1123 8.20312 29.25 8.75 29.25 8.75V12.0312H26.8125C25.0697 12.0312 24.375 13.1759 24.375 14.2188V16.9531H28.6406L28.0312 20.7812H24.375V30.0781H29.25C31.9422 30.0781 34.125 28.1192 34.125 25.7031V8.20312C34.125 5.78703 31.9422 3.82812 29.25 3.82812Z" fill="white"/>
                </svg>
              </div>
            </a>
          </div>
        </section> 


        <div class="space" style="height: 40px; width: 100%"></div>
        <?php
              if(isset($_SESSION['message'])){?>
               <p class="msg"><?=$_SESSION['message']?></p>
               <a href="./personal_account.php"><strong>страница профиля</strong></a>
             <? } unset($_SESSION['message']);
            ?>



    </div>

    <script type="text/javascript" src="libs/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
      var col = 1;
       document.addEventListener('click', function (e) {
       if (e.target.classList.contains("increment")) {
       ++e.target.parentElement.querySelector("input").value;
       col++;
      } else if (e.target.classList.contains("decrement")) {
      --e.target.parentElement.querySelector("input").value;
      col--;
      if (e.target.parentElement.querySelector("input").value<1){  e.target.parentElement.querySelector("input").value = 1;
      col = 1;
      }}
      })
      </script>
      <script>
        
        $('.number').change(function () {    
        col = $(this).val();
        if (col<1){ col = 1; $(this).val(1); }
        var id = $(this).attr('id'); 
        var price = $('#oneprice').text();
            $.ajax({
            type: "POST",
            url: './kernel/cartamount.php',
            data: {col_tov: col, id_tov: id},
            success: function() {
              console.log(col * price);
              $('#'+id+' .price').text((col++) * price);
                }
            });
        });
        $('.increment').click(function () {  
        var id = $(this).attr('id');
        col = $('#'+id+' .number').val();
        price = $('#oneprice').text();
            $.ajax({
            type: "POST",
            url: './kernel/cartamount.php',
            data: {col_tov: col, id_tov: id},
            success: function(data) {
              console.log(col);
                  $('#'+id+' .price').text((col) * price);
                }
            });
        });
        $('.decrement').click(function () {  
        var id = $(this).attr('id');
        col = $('#'+id+' .number').val();
        if (col<1){ col = 1; }
        price = $('#oneprice').text();
            $.ajax({
            type: "POST",
            url: './kernel/cartamount.php',
            data: {col_tov: col, id_tov: id},
            success: function(data) {
              console.log(col);
                  $('#'+id+' .price').text((col) * price);
                }
            });
        });
        $('.delete').click(function () {  
        console.log("1");
        var id = $(this).attr('id');
            $.ajax({
            type: "POST",
            url: './kernel/cartdel.php',
            data: {id_tov: id},
            success: function(data) {
                    console.log("2");
                    $('div#'+id).css('display', 'none');
                }
            });
        });
        $('.checkout_btn').click(function () {     
        console.log("1");
            $.ajax({
            type: "POST",
            url: './kernel/cartorder.php',
            data: {},
            success: function(data) {
                    console.log("2");
                    $('#free_shipping').css('display', 'none');
                }
            });
        });
        $('.free_shipping').click(function () {  
            $.ajax({
            url: './kernel/cartdelall.php',
            success: function() {
              console.log("2");
                    $('#free_shipping').css('display', 'none');
              }
            });
        });
</script>
  </body>
</html>