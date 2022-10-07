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
function Add_More_Field() {
    i++;
    questionId = 'widget-faq_ask_question-7-question-' + i;
    questionName = 'widget-faq_ask_question[7][question-' + i + ']';
    answerId = 'widget-faq_ask_question-7-answer-' + i;
    answerName = 'widget-faq_ask_question[7][answer-' + i + ']';
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








