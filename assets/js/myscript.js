
// Manejar clics en el botón de agregar al carrito
$('.plus-cart').click(function(){
    // Obtener el ID del producto del atributo 'pid'
    var id = $(this).attr("pid").toString();
    // Encontrar el elemento que muestra la cantidad en la misma fila
    var eml = $(this).closest('.row').find('#cantidad');
    console.log("pid = ", id)
    // Realizar una solicitud AJAX para aumentar la cantidad en el carrito
    $.ajax({
        type: "GET",
        url: "/pluscart",
        data: {
            prod_id: id
        },
        success: function(data){
            console.log("data =",data);
            // Actualizar la cantidad en el elemento HTML
            eml.text(data.cantidad);
            // Actualizar otros elementos con la información del carrito
            document.getElementById("amount").innerText = data.amount;
            document.getElementById("totalamount").innerText = data.totalamount;
            document.getElementById("total_savings").innerText = data.total_savings;
        }
    })
  });
  
  // Manejar clics en el botón de disminuir cantidad en el carrito
  $('.minus-cart').click(function(){
    var id = $(this).attr("pid").toString();
    var eml = $(this).closest('.row').find('#cantidad');
    $.ajax({
        type: "GET",
        url: "/minuscart",
        data: {
            prod_id: id
        },
        success: function(data){
            // Actualizar la cantidad en el elemento HTML
            eml.text(data.cantidad);
            // Actualizar otros elementos con la información del carrito
            document.getElementById("amount").innerText = data.amount;
            document.getElementById("totalamount").innerText = data.totalamount;
            document.getElementById("total_savings").innerText = data.total_savings;
        }
    })
  });
  
 // Manejar clics en el botón de eliminar producto del carrito
$('.remove-cart').click(function(){
    var id = $(this).attr("pid").toString();
    // Obtener la referencia al botón actual para su eliminación posterior
    var eml = this;
    $.ajax({
        type: "GET",
        url: "/removecart",
        data: {
            prod_id: id
        },
        success: function(data){
            // Actualizar otros elementos con la información del carrito
            document.getElementById("amount").innerText = data.amount;
            document.getElementById("totalamount").innerText = data.totalamount;
            document.getElementById("total_savings").innerText = data.total_savings;
            
            // Eliminar la fila del producto del carrito después de que la solicitud AJAX sea exitosa
            $(eml).closest('.row').remove();
        }
    })
  });
  // Manejar clics en el botón de agregar a la lista de deseos
  $('.plus-wishlist').click(function(){
    var id = $(this).attr("pid").toString();
    $.ajax({
        type: "GET",
        url: "/pluswishlist",
        data: {
            prod_id: id
        },
        success: function(data){
            // Redirigir a la página de detalles del producto
            window.location.href = `http://localhost:8000/layout-detalles-producto/${id}`
        }
    })
  });
  
  // Manejar clics en el botón de disminuir cantidad en la lista de deseos
  $('.minus-wishlist').click(function(){
    var id = $(this).attr("pid").toString();
    $.ajax({
        type: "GET",
        url: "/minuswishlist",
        data: {
            prod_id: id
        },
        success: function(data){
            // Redirigir a la página de detalles del producto
            window.location.href = `http://localhost:8000/layout-detalles-producto/${id}`
        }
    })
  });

  
  
  
  
  
  