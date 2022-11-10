<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <style>
        .info {
            border: 3px outset red;
            background-color: lightblue;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="info">
        {fetch file='https://www.google.co.in/'}
    </div>

    {* This is a Smarty comment *}

    <h1 style=" color: red; text-align: center; ">*** {$Name} ***</h1>
    {* Printing the value of a variable *}

    <h3>*** Printing array using key value pair ***</h3>

    <div class="info">
        <p>UserID-{$ContactInfo1.UserID} </p>
        <p>Email id -{$ContactInfo1.email}</p>
        <p>Phone No-{$ContactInfo1.phone.ph1} , {$ContactInfo1.phone.ph2}</p>

        </ul>
        </p>
    </div>

    <h3>*** Printing array using index ***</h3>

    <div class="info">
        <p>UserID-{$ContactInfo2[0]}
        <p>
        <p>Email id -{$ContactInfo2[1]}</p>
        <p>Phone No-{$ContactInfo2[2][0]} , {$ContactInfo2[2][1]}</p>

        </p>
    </div>

    <h3>*** Variables loaded from config files ***</h3>
    {config_load file='config/foo.conf'}

    <div class="info">
        <table align="center" border="{#tableBorderSize#}" bgcolor="{#tableBgColor#}">
            <tr bgcolor="{#rowBgColor#}">
                <td>First</td>
                <td>Last</td>
                <td>Address</td>
            </tr>
        </table>
    </div>

    <h3>*** Attribute ***</h3>

    <div class="info">
        <p>*** Substring ***</p>
        {assign var=foo value=substr($Name,6,6)}
        {$foo} <br>
        <p>*** String length ***</p>
        {assign var=foo value=$Name|strlen}
        {$foo} <br>
    </div>

    <h3>*** Counter ***</h3>

    <div class="info">
        {counter start = 10 skip =20 } <br>
        {counter} <br>
        {counter} <br>
        {counter} <br>
        {counter} <br>
    </div>

    <h3>*** Printing table with smarty variables using function ***</h3>

    {function name=menu }
    <ul class="info">
        <li>{$book1}</li>
        <li>{$book2}</li>
        <li>{$book3}</li>

    </ul>
    {/function}



    {menu}
    <div class="info">
        <button onclick="p()">Click me</button>
    </div>


    <h1 style="text-align:center;">*** Variable modifier ***</h1>
    <br>


    <div class="info">

        <p>*** Capitalizaation ***</p>

        {$book2} <br>
        {$book2|capitalize} <br>
        {$book2|capitalize:true} <br>

        <p>*** lover ***</p>

        {$book1} <br>
        {$book1|lower} <br>

        <p>*** now ***</p>

        {$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}

        <p>*** UPPER ***</p>

        {$book2} <br>
        {$book2|upper} <br>

        <p>*** Concatination ***</p>

        {$book1|cat:" is my favourite book."}

        <p>*** count_characters ***</p>

        {$book1} <br>
        {$book1|count_characters} <br>
        {$book1|count_characters:true}

        <p>*** count_words ***</p>

        {$book1} <br>
        {$book1|count_words} <br>

        <p>*** count_paragraphs ***</p>

        {$Passage} <br>
        {$Passage|count_paragraphs} <br>

        <p>*** count_sentences ***</p>

        {$Passage} <br>
        {$Passage|count_sentences} <br>

        <p>*** Default ***</p>

        {$Passage|default:"Not avilable "} <br><br>
        <p>Employee ID - {$employeeID|default: "will update soon"} <br>

        <p>*** count_sentences ***</p>

        {$Passage|count_sentences} <br>

        <p>*** replace ***</p>

        {$Passage|replace: "Smarty":"The Smarty"}

        <p>*** escape ***</p>

        {* email address mangled *}
        <a href="mailto:{$EmailAddress|escape:'hex'}">{$EmailAddress|escape:'mail'}</a>

        <p>*** spacify ***</p>

        {$book2} <br>
        {$book2|spacify} <br>
        {$book2|spacify:"^^"} <br>

        <p>*** Trancate ***</p>
        {$Passage|truncate:30} <br>
        {$Passage|truncate:30:'..':true:ture} <br>
        {$Passage|truncate:30:"----"} <br>

        <p>*** Combining modifier***</p>
        {$book2|upper|spacify:"^^"} <br>

    </div>


    {$book2|wordwrap:5}

    <h1 style="text-align:center;">*** Build in function ***</h1>
    <div class="info">
        <p>*** Appending element to array ***</p>
        {append var="ContactInfo1" value="Meerut" index="Address"}

        {$ContactInfo1.Address} <br>

        {append "ContactInfo2" "Noida" index="Address"}

        {$ContactInfo2.Address} <br>

        <p>*** Capture ***</p>

        {capture append="A"}Surya{/capture}
        My name is
        {capture append="A"}Pratap Singh{/capture}

        {foreach $A as $text}{$text} {/foreach}

        <p>*** for ***</p>
        <ul>
            {for $foo=$start to $to}
            <li>{$foo}</li>
            {/for}
        </ul>

        <p>*** forelse ***</p>

        {$start = 10}
        {$to = 5}

        <ul>
            {for $foo=$start to $to}
            <li>{$foo}</li>
            {forelse}
            no iteration
            {/for}
        </ul>

        <p>*** Foreach without key value ***</p>

        <ul>
            {foreach $ContactInfo2 as $value}
            <li>{$value}</li>
            {/foreach}
        </ul>

        <p>*** Foreach with key value ***</p>

        <ul>
            {foreach $ContactInfo1 as $value}
            <li>{$value@key} : {$value}</li>
            {/foreach}
        </ul>

        <p>*** Foreach with nested item ***</p>

        <ul>
            {foreach $ContactInfo1 as $value}
            {foreach $value as $data}
            <li>{$data@key} : {$data}</li>
            {/foreach}
            {/foreach}

        </ul>

        <p>*** iterator ***</p>

        {foreach $ContactInfo2 as $name}
        {if $name@iteration is div by 4}
        <b>{$name}</b> <br>
        {/if}
        {$name} <br>
        {/foreach}

        <p>*** index ***</p>


        {foreach $ContactInfo2 as $i}
        {if $i@index eq 3}
        {* put empty table row *}
        nbsp; <br>
        {/if}
        {$i} <br>
        {/foreach}

        <p>*** iteration example: is even/odd by ***</p>
        {foreach $arr as $name}
        {if $name@iteration is even by 3}
        <span style="color: #000">{$name}</span> <br>
        {else}
        <span style="color: magenta">{$name}</span> <br>
        {/if}
        {/foreach}

        <p>*** No of items in an array ***</p>
        {foreach $arr as $item}
        {if $item@last}
        {$item@total}
        {/if}
        {foreachelse}
        ... no items to loop ...
        {/foreach}

    </div>

    <h1 style="text-align:center;">*** Custom Function ***</h1>
    <div class="info">

        <p>*** Counter ***</p>

        {counter start = 10 skip =20 } <br>
        {counter} <br>
        {counter} <br>
        {counter} <br>
        {counter} <br>

        <p>*** Evaluate ***</p>
        {eval var=#intro#}

        <p>*** html_image ***</p>
        {html_image
        file='https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Elon_Musk_Royal_Society_%28crop2%29.jpg/440px-Elon_Musk_Royal_Society_%28crop2%29.jpg'}

        <p>*** html_checkboxes ***</p>

        {html_checkboxes name='id' values=$cust_ids output=$cust_names
        selected=$customer_id separator='<br />'}


        <p>*** html_option ***</p>

        {html_options name=foo options=$cust_names selected=$mySelect}

        <p>*** html_radios ***</p>

        {html_radios name='id' values=$cust_names output=$cust_names separator='<br />'}

        <p>*** html_select_date ***</p>

        {html_select_date prefix='StartDate' time=$time start_year='-10'
        end_year='+1' display_days=true
        }



        <p>*** html_select_time ***</p>

        {html_select_time use_24_hours=true}


        <p>*** mailto ***</p>

        <a href="mailto:spsingh30042002@gmail.com" >Sent mail</a>


        



    </div>




</body>
<script>
    function p() {
        alert("surya");
    }
</script>

</html>