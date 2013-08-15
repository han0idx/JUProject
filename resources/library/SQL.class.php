<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

	class iSQL {
            
            function selectQuery($q){
                $i=0;
                $bdd = mysqli_connect('127.0.0.1','root','') or die("Unable to connect DB");
                mysqli_select_db($bdd, "testprima");
                $resultat = mysqli_query($bdd,$q);
                $out="<ul>";
                while($donnees = mysqli_fetch_assoc($resultat))
                {
                    if($i%2==0) $class="odd";
                    else $class="even";
                    $out.="<li class='".$class."'><a href='.?test=".$donnees['id']."'>".$donnees['title']."</a></li>";
                    $i++;
                }
                $out.="</ul>";
                mysqli_free_result($resultat);
                mysqli_close($bdd); 
                
                return $out;

            }
        }
?>
