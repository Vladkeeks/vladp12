// jQuery .html() Method Example
function changeHTML() {
    $('#htmlContent').html('<p>New content added through .html() method</p>');
  }
  
  // jQuery .css() Method Example
  function applyStyles() {
    $('#cssContent').css({
      'color': 'red',
      'font-size': '20px',
      'background-color': 'lightblue'
    });
  }
  
  // jQuery .val() Method Example
  function changeValue() {
    $('#inputField').val('New value');
  }
  
  // jQuery .attr() Method Example
  function changeAttributes() {
    $('#image').attr({
      'alt': 'Changed Image Alt Text',
      'src': 'https://via.placeholder.com/300' // Changing image source for demonstration
    });
  }
  
  // jQuery .removeAttr() Method Example
  function enableButton() {
    $('#disableBtn').removeAttr('disabled');
  }
  // jQuery .append() Method Example
function addContent() {
    $('#appendContainer').append('<p>Additional content added using .append()</p>');
  }
  
  // jQuery .clone() Method Example
  function cloneElement() {
    var clonedElement = $('#original').clone();
    $('#original').remove(); // Removing the original element
  }
  
  // jQuery .width() Method Example
  function changeWidth() {
    $('#dynamicWidthElement').width(function(index, width) {
      return width * 2; // Doubling the width of the element
    });
  }
  
  // jQuery .outerWidth() Method Example
  function getOuterWidth() {
    var outerWidth = $('#outerWidthElement').outerWidth();
    alert("Outer width of the element: " + outerWidth);
  }
  