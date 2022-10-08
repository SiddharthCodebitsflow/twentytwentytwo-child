let currentPage = 1;
function getData(maxPage, testimonialId_name) {
    currentPage++;
    if (currentPage > maxPage) {
        jQuery('#loadId').hide();
    } else {
        // Do currentPage + 1, because we want to load the next page
        jQuery.ajax({
            type: 'POST',
            url: '/wp-launchpad/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'weichie_load_more',
                paged: currentPage,
                testimonialId_name: testimonialId_name,
            },
            success: function (res) {
                jQuery('.testimonial-listing').append(res);
            }
        });
    }
}
let i = 1;
let maxquestion = 1;
function Add_More_Field(questionId, questionName, answerId, answerName) {
    questionName = questionName.slice(0, -1);
    answerName = answerName.slice(0, -1);
    // alert(questionId + " \n" + questionName + " \n" + answerId + " \n" + answerName);
    i++;
    questionId = questionId + '-' + i;
    questionName = questionName + i + ']';
    answerId = answerId + '-' + i;
    answerName = answerName + i + ']';
    maxquestion++;
    if (maxquestion <= 5) {
        jQuery.ajax({
            type: 'POST',
            url: '/wp-launchpad/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'add_more',
                questionId: questionId,
                questionName: questionName,
                answerId: answerId,
                answerName: answerName
            },
            success: function (res) {
                jQuery('.widget-help').append(res);
            }
        });
    } else {
        jQuery('.btn-add').hide();
    }
}








