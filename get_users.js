$(document).ready(function() {
    $('#load-btn').click(function() {
        $.ajax({
            url: 'saved_data.txt',  // ???? ? ?????? txt-?????
            type: 'GET',
            dataType: 'text', // ??? ?????? - ?????
            success: function(data) {
                // ???????????? ?????? ? ??????? ?? ????????
                let output = '<ul>';
                const lines = data.split('\n');
                
                lines.forEach(function(line) {
                    if (line.trim() !== '') {
                        const parts = line.split('|');
                        output += `
                            <li>
                                <h3>${parts[0]}</h3>
                                <p>${parts[1]}</p>
                                
                            </li>
                        `;
                    }
                });
                
                output += '</ul>';
                $('#data-container').html(output);
            },
            error: function(xhr, status, error) {
                $('#data-container').html(`<p style="color:red">??????: ${error}</p>`);
            }
        });
    });
});