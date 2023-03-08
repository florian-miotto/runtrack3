$(document).ready(function() {
    var emptyTile = 9;
    var moves = 0;
    
    var images = [
      'images/logo_01.jpg',
      'images/logo_02.jpg',
      'images/logo_03.jpg',
      'images/logo_04.jpg',
      'images/logo_05.jpg',
      'images/logo_06.jpg',
      'images/logo_07.jpg',
      'images/logo_08.jpg'
    ];
    
    function shuffle(array) {
      var currentIndex = array.length, temporaryValue, randomIndex;
  
      while (0 !== currentIndex) {
  
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
  
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
      }
  
      return array;
    }
  
    function moveTile(tile) {
      var currentTile = tile.attr('id').substring(4);
      if (canMove(currentTile)) {
        var temp = $('#tile'+emptyTile).html();
        $('#tile'+emptyTile).html(tile.html());
        tile.html(temp);
        emptyTile = currentTile;
        moves++;
        checkWin();
      }
    }
    
    function canMove(tile) {
        var emptyRow = Math.floor((emptyTile-1) / 3) + 1;
        var emptyCol = (emptyTile-1) % 3 + 1;
        var tileRow = Math.floor((tile-1) / 3) + 1;
        var tileCol = (tile-1) % 3 + 1;
        return ((emptyRow == tileRow && Math.abs(emptyCol - tileCol) == 1) || (emptyCol == tileCol && Math.abs(emptyRow - tileRow) == 1));
      }
    function checkWin() {
        if ($('#tile1').children('img').attr('src') == 'images/logo_01.jpg' &&
        $('#tile2').children('img').attr('src') == 'images/logo_02.jpg' &&
        $('#tile3').children('img').attr('src') == 'images/logo_03.jpg' &&
        $('#tile4').children('img').attr('src') == 'images/logo_04.jpg' &&
        $('#tile5').children('img').attr('src') == 'images/logo_05.jpg' &&
        $('#tile6').children('img').attr('src') == 'images/logo_06.jpg' &&
        $('#tile7').children('img').attr('src') == 'images/logo_07.jpg' &&
        $('#tile8').children('img').attr('src') == 'images/logo_08.jpg' &&
        $('#tile9').children('img').length == 0) {
        $('#message').addClass('win').text('Vous avez gagné !');
        $('.tile').off('click');
        }
        }
        
        function resetGame() {
            var shuffledImages = shuffle(images);
            $('.tile').each(function(index, element) {
              if (index < 8) {
                $(element).html('<img src="' + shuffledImages[index] + '" />');
              } else {
                $(element).empty();
              }
            });
            
            $('.tile').css('transition', 'none');
            var emptyTileIndex = Math.floor(Math.random() * 9);
            $('.tile').each(function(index, element) {
              if (index == emptyTileIndex) {
                $(element).addClass('empty');
              } else {
                $(element).removeClass('empty');
              }
              $(element).css({
                left: ((index % 3) * 100) + 'px',
                top: (Math.floor(index / 3) * 100) + 'px'
              });
            });
            emptyTile = emptyTileIndex + 1;
            moves = 0;
            $('#message').removeClass('win').text('');
            $('.tile').on('click', function() {
              moveTile($(this));
            });
            setTimeout(function() {
              $('.tile').css('transition', 'left 0.3s ease-in-out, top 0.3s ease-in-out');
            }, 100);
          }
          
          
        
        resetGame();
        
        $('#reset').on('click', function() {
        resetGame();
        });
        });
  