
$(".select-basico").on('change', function (e) {
    var duracao = $(this).val()
    var checkbox = $('.select-convites').val();
    console.log(duracao);

    switch (duracao) {

        case '0':
            break

        case '1':
            if (checkbox == 'false') {
                $('.valor-plano-basico').html('R$ 419');
            } else {
                $('.valor-plano-basico').html('R$ 499');
            }
            break;
        case '2':
            if (checkbox == 'false') {
                $('.valor-plano-basico').html('R$ 640');

            } else {
                $('.valor-plano-basico').html('R$ 760');
            }
            break;
    }
});


$(".select-convites").on('change', function (e) {
    var checkbox = $(this).val()
    var duracao = $('.select-precos').val();
    console.log(duracao);

    switch (duracao) {

        case '0':
            break

        case '1':
            if (checkbox == 'nao') {
                $('.valor-plano-basico').html('R$ 419');
            } else {
                $('.valor-plano-basico').html('R$ 499');
            }
            break;
        case '2':
            if (checkbox == 'nao') {
                $('.valor-plano-basico').html('R$ 640');

            } else {
                $('.valor-plano-basico').html('R$ 760');
            }
            break;
    }
});


/* SELECT PRO */

$(".select-pro").on('change', function (e) {
    var duracao = $(this).val()
    console.log(duracao);

    switch (duracao) {

        case '0':
            break

        case '1':
                $('.valor-plano-pro').html('R$ 1.320');
            break;
        case '2':
                $('.valor-plano-pro').html('R$ 1.700');
            break;
    }
});

/* SELECT ULTRA */

$(".select-ultra").on('change', function (e) {
    var duracao = $(this).val()
    console.log(duracao);

    switch (duracao) {

        case '0':
            break

        case '1':
                $('.valor-plano-ultra').html('R$ 2.000');
            break;
        case '2':
                $('.valor-plano-ultra').html('R$ 2.500');
            break;
    }
});

