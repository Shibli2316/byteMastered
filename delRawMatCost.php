<?php 
    include 'includes/_topbar.php';
    $idProd = $_GET['pid'];
    $idRM = $_GET['rmid'];
    $page = $_GET['page'];
    if($page == 'As'){
        $actionLink = "addProdArk.php?id=".$idProd."&type=".$page."&updateType=new";
    }else if($page == "T"){
        $actionLink = "addProdTab.php?id=".$idProd."&type=".$page."&updateType=new";
    }else if($page == "Ds"){
        $actionLink = "addProdDawa.php?id=".$idProd."&type=".$page."&updateType=new";
    }else if($page == "S"){
        $actionLink = "addProdSyrup.php?id=".$idProd."&type=".$page."&updateType=new";
    }else if($page == "P"){
        $actionLink = "addProdPowder.php?id=".$idProd."&type=".$page."&updateType=new";
    }else{
        $actionLink = "404NotFound.php";
    }
    $sql = "DELETE FROM product_details WHERE `product_details`.`pid` = $idProd AND `product_details`.`raw_id` = $idRM";
        $result= mysqli_query($conn, $sql);
        if($result){
            echo "
            <div class='flex items-center p-4 m-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800' role='alert'>
                <svg class='flex-shrink-0 inline w-4 h-4 me-3' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 20 20'>
                    <path d='M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z'/>
                </svg>
            <span class='sr-only'>Info</span>
                <div>
                <span class='font-medium'>Alert!</span> Item deleted successfully. You will be redirected in 3 secs.
                </div>
            </div>
            ";
        }
        else{
            echo "
            <div class='flex items-center p-4 m-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800' role='alert'>
                <svg class='flex-shrink-0 inline w-4 h-4 me-3' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 20 20'>
                    <path d='M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z'/>
                </svg>
            <span class='sr-only'>Info</span>
                <div>
                <span class='font-medium'>Alert!</span> Cannot delete item (Dependency involved). You will be redirected in 3 secs.
                </div>
            </div>
            ";
        }
        echo "<meta http-equiv='refresh' content='3;url=".$actionLink."' />";
 ?>



<?php include 'includes/_bottombar.php' ?>