'use strict';

    // モーダルウィンドウ
    $(function(){
        $('.js-modal-open').each(function(){
            $(this).on('click',function(){
                var target = $(this).data('target');
                var modal = document.getElementById(target);
                $(modal).fadeIn();
                return false;
            });
        });
        $('.js-modal-close').on('click',function(){
            $('.js-modal').fadeOut();
            return false;
        }); 
    });
    

    // 商品の金額計算
    function total_calc(){

        // 合計金額
        let total = 0;

        // B0041
        // value値を取得
        let price1 = $("#priceB0041").val();
        let quantity1 = $("#quantityB0041").val();
        // 小計
        let subtotal1 = price1 * quantity1;
        $("#subtotalB0041").val(subtotal1);
        // 合計
        total += price1 * quantity1;

        // B0058
        let price2 = $("#priceB0058").val();
        let quantity2 = $("#quantityB0058").val();
        let subtotal2 = price2 * quantity2;
        $("#subtotalB0058").val(subtotal2);
        total += price2 * quantity2;

        // Y0033
        let price3 = $("#priceY0033").val();
        let quantity3 = $("#quantityY0033").val();
        let subtotal3 = price3 * quantity3;
        $("#subtotalY0033").val(subtotal3);
        total += price3 * quantity3;

        // Y0011
        let price4 = $("#priceY0011").val();
        let quantity4 = $("#quantityY0011").val();
        let subtotal4 = price4 * quantity4;
        $("#subtotalY0011").val(subtotal4);
        total += price4 * quantity4;

        // Y0068
        let price5 = $("#priceY0068").val();
        let quantity5 = $("#quantityY0068").val();
        let subtotal5 = price5 * quantity5;
        $("#subtotalY0068").val(subtotal5);
        total += price5 * quantity5;

        // W0041
        let price6 = $("#priceW0041").val();
        let quantity6 = $("#quantityW0041").val();
        let subtotal6 = price6 * quantity6;
        $("#subtotalW0041").val(subtotal6);
        total += price6 * quantity6;

        // W0077
        let price7 = $("#priceW0077").val();
        let quantity7 = $("#quantityW0077").val();
        let subtotal7 = price7 * quantity7;
        $("#subtotalW0077").val(subtotal7);
        total += price7 * quantity7;

        // W0016
        let price8 = $("#priceW0016").val();
        let quantity8 = $("#quantityW0016").val();
        let subtotal8 = price8 * quantity8;
        $("#subtotalW0016").val(subtotal8);
        total += price8 * quantity8;

        // W0052
        let price9 = $("#priceW0052").val();
        let quantity9 = $("#quantityW0052").val();
        let subtotal9 = price9 * quantity9;
        $("#subtotalW0052").val(subtotal9);
        total += price9 * quantity9;

        // W0082
        let price10 = $("#priceW0082").val();
        let quantity10 = $("#quantityW0082").val();
        let subtotal10 = price10 * quantity10;
        $("#subtotalW0082").val(subtotal10);
        total += price10 * quantity10;

        // W0095
        let price11 = $("#priceW0095").val();
        let quantity11 = $("#quantityW0095").val();
        let subtotal11 = price11 * quantity11;
        $("#subtotalW0095").val(subtotal11);
        total += price11 * quantity11;

        // BK0010
        let price12 = $("#priceBK0010").val();
        let quantity12 = $("#quantityBK0010").val();
        let subtotal12 = price12 * quantity12;
        $("#subtotalBK0010").val(subtotal12);
        total += price12 * quantity12;

        // BK0023
        let price13 = $("#priceBK0023").val();
        let quantity13 = $("#quantityBK0023").val();
        let subtotal13 = price13 * quantity13;
        $("#subtotalBK0023").val(subtotal13);
        total += price13 * quantity13;

        // BK0024
        let price14 = $("#priceBK0024").val();
        let quantity14 = $("#quantityBK0024").val();
        let subtotal14 = price14 * quantity14;
        $("#subtotalBK0024").val(subtotal14);
        total += price14 * quantity14;



        // 合計金額
        $(".total").val(total);
    
    }
    
