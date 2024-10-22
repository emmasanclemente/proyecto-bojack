//CARGAR COMENTARIOS
document.addEventListener("DOMContentLoaded", function() {
    fetch('load_comments.php')
        .then(response => response.json())
        .then(data => {
            const commentSection = document.getElementById('commentSection');
            data.forEach(comment => {
                const commentDiv = document.createElement('div');
                commentDiv.innerHTML = `<strong>${comment.username}</strong><p>${comment.comentario}</p><small>${comment.fecha}</small>`;
                commentSection.appendChild(commentDiv);
            });
        });
});

//MOSTRAR CUADRO PARA RESPONDER
function showReplyForm(commentId) {
    document.getElementById('replyForm-' + commentId).style.display = 'block';
}

