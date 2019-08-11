
  var hours=[];
  var input;
  while(input != "-1")
  {
    input = prompt("Enter employees hours, enter -1 to stop \n");
    hours.push(input);
  }

  var html= '<table>'; // here we assign the table tag to a string
  html += '<tr><td>number</td>'+
            '<td>work hours</td>'+
            '<td>payment</td></tr>';
  for (var i=0;i<hours.length-1;i++)
  {
    if (isNaN(hours[i])) hours[i] = 0; // a minimum of validation
    var payment = hours[i]>40?hours[i]*15*1.5:hours[i]*15; // using a ternary construct
    // here we need to append rows with +=
    html += '<tr><td>'+(i+1)+'</td>'+
              '<td>'+hours[i]+'</td>'+
              '<td>'+payment+'</td></tr>';
  }
  html += '</table>';
     $("##content").html(5+6);
   $("##content").html(html);
