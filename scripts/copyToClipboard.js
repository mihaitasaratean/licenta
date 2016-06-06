function CopyToClipboard(elemId)

{
//CopiedTxt = document.selection.createRange();
//CopiedTxt.execCommand("Copy");

var aux = document.getElementById(elemId);

    aux.document.execCommand('SelectAll').execCommand("Copy");

//
//
//
//aux.onclick = document.execCommand()
//
//   Assign it the value of the specified element
//  aux.setAttribute("value", document.getElementById(elementId).innerHTML);
//  
//   Append it to the body
//  document.body.appendChild(aux);
//  
//   Highlight its content
//  aux.select();
//  
//   Copy the highlighted text
//  document.execCommand("copy");
//  
//   Remove it from the body
//  document.body.removeChild(aux);
//  
}

