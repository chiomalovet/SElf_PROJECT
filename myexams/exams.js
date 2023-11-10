//appendchild is like adding an element into another element
function addText() {
    var y = document.createElement("input");
    y.setAttribute('type', 'radio');
    y.setAttribute('name', 'answers');
    y.setAttribute('style', 'position:absolute;left:-15px;border-radius:300px; margin-top:10px;');
    var x = document.createElement("input");
    x.setAttribute('name', 'option[]');
    x.setAttribute('placeholder', 'option');
    x.setAttribute('style', ' margin-bottom:3px; margin-top:5px; background-color:#2E2252; color:white; border:none; ')

    var div1 = document.getElementById("add");
    linebreak = document.createElement("br");

    div1.appendChild(x);
    div1.appendChild(y);
    div1.appendChild(linebreak);
    // #202A44 navy blue
    // 45411D brownish
    // #2E2252 present color


}

// function checkbox() {
//     var z = document.createElement("input");
//     z.setAttribute("type", "checkbox");
//     z.setAttribute("name", "multiple_answers[]");
//     z.setAttribute('style', 'position:absolute;left:13px;border-radius:300px; margin-top:10px;');
//     var c = document.createElement("input");
//     c.setAttribute("name", "multiple_option[]");
//     var div1 = document.getElementById("checkbox");
//     linebreak = document.createElement("br");
//     div1.appendChild(c);
//     div1.appendChild(z);
//     div1.appendChild(linebreak);

// }

// function boolen() {
//     var z = document.createElement("input");
//     z.setAttribute("type", "checkbox");
//     z.setAttribute("name", "boolen_answers");
//     z.setAttribute("value", 1);
//     z.setAttribute('style', 'position:absolute;left:13px;border-radius:300px; margin-top:10px;');
//     var c = document.createElement("input");
//     c.setAttribute("name", "boolen[]");
//     var div1 = document.getElementById("boolen");
//     linebreak = document.createElement("br");
//     div1.appendChild(c);
//     div1.appendChild(z);
//     div1.appendChild(linebreak);
//     // console.log(z);
// }