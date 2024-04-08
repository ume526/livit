$(function () {
    function switchAcList() {
        var sendai = false;

        var $checkedStations = $('.station_btn:checked');
        $checkedStations.each(function (i, e) {
            if ($(e).data('station') == '仙台駅') {
                sendai = true;
                return false;
            }
        });

        if (sendai) {
            $('#detail').show();
            $('#detail').find('input').prop('disabled', false);
        } else {
            $('#detail').hide();
            $('#detail').find('input').prop('disabled', true);
        }
    }
    $('.station_btn').click(switchAcList);

    switchAcList();
    $('.searchBoxFrom .firstBox input[type=checkbox]').change();
});
