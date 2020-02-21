$('#myCarousel').on('slid.bs.carousel', function (e) {
  $('#myCarousel').carousel('2') // Vai deslizar para o slide 2, antes que a transição do slide 1 finalize
})

$('#myCarousel').carousel('1') // Vai começar deslizando para o slide 1 e retornará o invocador
$('#myCarousel').carousel('2') // !! Vai ser ignorado, já que a transição para o slide 1 ainda não finalizou !!