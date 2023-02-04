<link href="style.css" rel="stylesheet" />
<header>
    <div class ="center">
      <div class=" logo">
        <a href="index.php"></a>
      </div>
      <div class="menu">
    </div>
    <div class="menu-mobile">
        <i class="fas fa-bars menu-mobile-icon"></i>
        <div class="menu-items">
            <a href="index.php">Home</a>
            <a href="entrar.php">entrar</a>
            <a href="cadastro.php">cadastro</a>
        </div>
    </div>
  </header>
  <script src="https://kit.fontawesome.com/16544f2866.js" crossorigin="anonymous"></script>
    <script>

        var el = document.querySelector('.menu-mobile-icon');

        el.addEventListener('click',()=>{
            var menuItems = document.querySelector('.menu-items');
            if(menuItems.classList.contains('show')){
                menuItems.classList.add('hide');
                menuItems.classList.remove('show');
            }else{
                menuItems.classList.add('show');
                menuItems.classList.remove('hide');
            }
        });

    </script>
 