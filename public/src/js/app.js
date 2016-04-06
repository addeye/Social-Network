/**
 * Created by deyelovi on 22/03/2016.
 */
var postId = 0;
var postBodyElement = null;

$('.post').find('.interaction').find('.edit').on('click', function(event)
{
    event.preventDefault();

    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
    postId = $(this).attr("data-postId");
    $('#post-body').val(postBody);
    $('#edit-modal').modal();
    console.log(postId);
    console.log(postBodyElement);
});

$('#modal-save').on('click', function() {
    $.ajax({
        method: 'POST',
        url: urlEdit,
        data: {body: $('#post-body').val(), postId: postId, _token: token}
    })
        .done(function (msg) {
            $(postBodyElement).text(msg['new_body']);
            $('#edit-modal').modal('hide');
        });
});

$('.like').on('click', function(event){
    event.preventDefault();
    postId = $(this).attr("data-postId");
    var isLike = event.target.previousElementSibling == null;
    $.ajax({
        method : 'POST',
        url : urlLike,
        data : {isLike : isLike, postId : postId, _token: token}
    })
        .done(function(){
            console.log('status sudah ajax '+isLike);
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
            if(isLike){
                event.target.nextElementSibling.innerText = 'Dislike';
                var jml_like = $('#number_like').text();
            } else {
                event.target.previousElementSibling.innerText = 'Like';
            }
        });
});

