$(function(){
    //console.log("hello");
    $("#search-wilaya").on("keyup", function(){
        var search = $("#search-wilaya").val();
        var regex = new RegExp(search, 'i');
        var output;
		
        if(search.length < 3)
        {
            $("#output").html("<tr class='text-center'>Aucun Resultat</tr>");
        }else{
            $.getJSON("http://192.168.5.1/json/reseaux_v2.json ",function(data)
            {
                $.each(data,function(key,val){
                    if ((val.Wilaya_fr.search(regex) != -1) || (val.Site_fr.search(regex) != -1))
                    {
                        output += "<tr>";
                        output += `<td> ${val.Wilaya_fr} </td> `;
                        output += `<td> ${val.Site_fr} </td>`;
                        output += "<td>"+ val.phone +"</td>";
                        output += "<td>"+ val.fax +"</td>";
                        output += "<td>"+ val.email +"</td>";
                        output += "<td>"+ val.adresse +"</td>";
                        output += "<td>"+ val.map +"</td>";
                        output += "</tr>";
                    }else{
                        output += "<tr class='text-center'>Aucun Resultat</tr>";
                    }
                    $("#output").html(output);
                });
				
            });
        }
    });
});