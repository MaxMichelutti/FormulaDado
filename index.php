<HTML>
                <HEAD>
                               <TITLE>
           Formula Dado
                               </TITLE>
                </HEAD>
                <BODY>
                               <FORM action="index.php" method=post>
<?php
//Caricamento grafiche
$Grafica[0][0]="<IMG src='FERRARI_GAME_R.png' width='120' height='47'>";
$Grafica[0][1]="<IMG src='FERRARI_GAME_L.png' width='120' height='47'>";
$Grafica[1][0]="<IMG src='MCLAREN_GAME_R.png' width='120' height='47'>";
$Grafica[1][1]="<IMG src='MCLAREN_GAME_L.png' width='120' height='47'>";
$Grafica[2][0]="<IMG src='BENETTON_GAME_R.png' width='120' height='47'>";
$Grafica[2][1]="<IMG src='BENETTON_GAME_L.png' width='120' height='47'>";
$Grafica[3][0]="<IMG src='WILLIAMS_GAME_R.png' width='120' height='47'>";
$Grafica[3][1]="<IMG src='WILLIAMS_GAME_L.png' width='120' height='47'>";
$Grafica[4][0]="<IMG src='JORDAN_GAME_R.png' width='120' height='47'>";
$Grafica[4][1]="<IMG src='JORDAN_GAME_L.png' width='120' height='47'>";
$Grafica[5][0]="<IMG src='JAGUAR_GAME_R.png' width='120' height='47'>";
$Grafica[5][1]="<IMG src='JAGUAR_GAME_L.png' width='120' height='47'>";
$Grafica[6][0]="<IMG src='BAR_GAME_R.png' width='120' height='47'>";
$Grafica[6][1]="<IMG src='BAR_GAME_L.png' width='120' height='47'>";
if (!(isset($_POST["autoP1"])))
{
                //Selezioamento auto Player
                echo " Seleziona la tua auto!<BR>
                       Ferrari    <INPUT type=radio name=autoP1 value=0><BR>
                       Mclaren    <INPUT type=radio name=autoP1 value=1><BR>
                       Benetton   <INPUT type=radio name=autoP1 value=2><BR>
                       Williams   <INPUT type=radio name=autoP1 value=3><BR>
                       Jordan     <INPUT type=radio name=autoP1 value=4><BR>
                       Jaguar     <INPUT type=radio name=autoP1 value=5><BR>
                       Bar        <INPUT type=radio name=autoP1 value=6><BR>
                       <INPUT type=hidden name=pag value=1>
                       <INPUT type=hidden name=CasellaP1 value=0>
                       <INPUT type=hidden name=CasellaCOM value=0>
                       <INPUT type=hidden name=FreniP1 value=0>
                       <INPUT type=hidden name=FreniCOM value=0>
                       <INPUT type=hidden name=MotoreP1 value=0>
                       <INPUT type=hidden name=MotoreCOM value=0>
                       <INPUT type=hidden name=GommeP1 value=0>
                       <INPUT type=hidden name=GommeCOM value=0>
                       <INPUT type=hidden name=LapP1 value=0>
                       <INPUT type=hidden name=LapCOM value=0>
                       <INPUT type=hidden name=KersP1 value=0>
                       <INPUT type=hidden name=KersCOM value=0>
                       <INPUT type=hidden name=DRSP1 value=0>
                       <INPUT type=hidden name=DRSCOM value=0>
                       <INPUT type=hidden name=TestP1 value=0>
                       <INPUT type=hidden name=TestCOM value=0>
                       <INPUT type=hidden name=SceKers value=1>
                                  <INPUT type=submit value='Scelto!'><BR>";
}
else
{
//Ricezione variabili
$SceKers=$_POST["SceKers"];
$autoP1=$_POST["autoP1"];
$CasP1=$_POST["CasellaP1"];
$CasCOM=$_POST["CasellaCOM"];
$FreniP1=$_POST["FreniP1"];
$FreniCOM=$_POST["FreniCOM"];
$MotP1=$_POST["MotoreP1"];
$MotCOM=$_POST["MotoreCOM"];
$GomP1=$_POST["GommeP1"];
$GomCOM=$_POST["GommeCOM"];
$LapP1=$_POST["LapP1"];
$LapCOM=$_POST["LapCOM"];
$KersP1=$_POST["KersP1"];
$KersCOM=$_POST["KersCOM"];
$DRSP1=$_POST["DRSP1"];
$DRSCOM=$_POST["DRSCOM"];
$TestP1=$_POST["TestP1"];
$TestCOM=$_POST["TestCOM"];
$pag=$_POST["pag"];
//Controllo fine gara
if(($LapP1>=4)||($LapCOM>=4))
{
                If($LapP1>$LapCOM)
                {
                               echo "Hai vinto!!!<BR>".$Grafica[$autoP1][0]."<BR><INPUT type=submit value='Inizia un'altra gara!'>";
                }
                else
                {
                               echo "Hai perso!<BR><INPUT type=submit value='Inizia un'altra gara!'>";
                }
}
else
{
if($pag==1)
{
do
{
//Generazione avversario
$autoCOM=rand(0,6);
}while($autoCOM==$autoP1);
echo "Tu<BR>".$Grafica[$autoP1][0]."<BR>";
echo "Avversario<BR>".$Grafica[$autoCOM][0]."<BR>
                       <INPUT type=hidden name=pag value=2>
                       <INPUT type=hidden name=CasellaP1 value=0>
                       <INPUT type=hidden name=CasellaCOM value=0>
                       <INPUT type=hidden name=FreniP1 value=0>
                       <INPUT type=hidden name=FreniCOM value=0>
                       <INPUT type=hidden name=MotoreP1 value=0>
                       <INPUT type=hidden name=MotoreCOM value=0>
                       <INPUT type=hidden name=GommeP1 value=0>
                       <INPUT type=hidden name=GommeCOM value=0>
                       <INPUT type=hidden name=LapP1 value=0>
                       <INPUT type=hidden name=LapCOM value=0>
                       <INPUT type=hidden name=KersP1 value=0>
                       <INPUT type=hidden name=KersCOM value=0>
                       <INPUT type=hidden name=DRSP1 value=0>
                       <INPUT type=hidden name=DRSCOM value=0>      
                       <INPUT type=hidden name=TestP1 value=0>
                       <INPUT type=hidden name=TestCOM value=0>
                       <INPUT type=hidden name=autoP1 value=$autoP1>
                       <INPUT type=hidden name=autoCOM value=$autoCOM>
                       <INPUT type=hidden name=SceKers value=1>
                                  <INPUT type=submit value='Lancia il dado!'><BR>";
}
elseif($pag==2)
{
$autoCOM=$_POST["autoCOM"];
//Testacoda
if($TestP1==0)
{
do
{
//Lancio Dado P1
$DadoP1=rand(1,7);
}while($DadoP1==1);
$DadoP1=$DadoP1-1;
echo "Hai fatto $DadoP1!";
//Gomme
if (($GomP1==1)&&($DadoP1!=1)&&($MotP1==0))
{
$DadoP1 = $DadoP1 - 1;
}
//Motore
if (($MotP1==1)&&($DadoP1!=1))
{
                if($DadoP1==2)
                $DadoP1=1;
                else
                $DadoP1=$DadoP1-2;
               
}
//DRS
if(($DRSP1==1)&&($MotP1==0)&&($GomP1==0)&&($FreniP1==0)&&($LapP1>1))
{
$DadoP1++;
$DRSP1=0;
}
//Kers
if($SceKers==0)
{
$DadoP1=$DadoP1+2;
$KersP1=2;
$SceKers=1;
}
//Scia
if((($CasP1==($CasCOM-1))&&($CasP1!=24))||(($CasCOM==0)&&($CasP1==31))&&($LapP1>0))
{
                $DadoCP1=$DadoP1+1;
}
//Frenientrata VDF
if(($CasP1==9)&&($FreniP1==1)&&($DadoP1>=6))
{
                $CasP1=$CasP1+25;
}
elseif(($CasP1==10)&&($FreniP1==1)&&($DadoP1>=5))
{
                $CasP1=$CasP1+25;
}
elseif(($CasP1==11)&&($FreniP1==1)&&($DadoP1>=4))
{
                $CasP1=$CasP1+25;
}
elseif(($CasP1==12)&&($FreniP1==1)&&($DadoP1>=3))
{
                $CasP1=$CasP1+25;
}
elseif(($CasP1==13)&&($FreniP1==1)&&($DadoP1>=2))
{
                $CasP1=$CasP1+25;
}
elseif(($CasP1==14)&&($DadoP1<6))
{
                $FreniP1=1;
                $CasP1=$CasP1+25;
}
elseif(($CasP1==14)&&($DadoP1==6))
{
                $FreniP1=1;
                $CasP1=$CasP1-4;
}
//Uscita VDF
elseif(($CasP1==40)&&($DadoP1>=5))
{
                $CasP1=$CasP1-29;
}
elseif(($CasP1==41)&&($DadoP1>=4))
{
                $CasP1=$CasP1-29;
}
elseif(($CasP1==42)&&($DadoP1>=3))
{
                $CasP1=$CasP1-29;
}
elseif(($CasP1==43)&&($DadoP1>=2))
{
                $CasP1=$CasP1-29;
}
elseif($CasP1==44)
{
                $CasP1=$CasP1-29;
}
//Entrata Scorciatoia
elseif(($CasP1==24)&&($DadoP1==1))
{
                $CasP1=99;
}
elseif(($CasP1==24)&&($DadoP1!=1))
{
                $CasP1=$CasP1+4;
}
//Uscita Scorciatoia
elseif($CasP1==100)
{
                $CasP1=29;
}
$CasP1=$CasP1 + $DadoP1;
//Fine giro
if(($CasP1>=32)&&($CasP1<40))
{
                $CasP1=$CasP1-32;
                $KersP1=0;
                $GomP1=0;
                $MotP1=0;
                $LapP1++;
}
echo "Ti muovi di $DadoP1!<BR>";
$K=0;
}
else
{
                echo "Sei in testacoda! Stai fermo questo turno<BR>";
                $K=1;
}
//Disegno Circuito
echo "<TABLE border=1><TR>";
echo"<TD>";
if($CasP1==12)
{
if($TestP1==0)
$TestP1=1;
echo $Grafica[$autoP1][0]."<BR>";
}
echo "&nbsp;TESTACODA!!!&nbsp;<BR>";
if($CasCOM==12)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD>";
if($CasP1==13)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;13&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==13)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD>";
if($CasP1==14)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;FRENI&nbsp;&nbsp;<BR>";
if($CasCOM==14)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==40)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==40)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==41)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==41)
echo $Grafica[$autoCOM][0]." ";
echo"</TD></TR><TR><TD>";
if($CasP1==11)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;11&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==11)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD height=4 bgcolor=green>";
echo"</TD>";
echo"<TD>";
if($CasP1==15)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;15&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==15)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=green>";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==42)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==42)
echo $Grafica[$autoCOM][1]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==10)
{
$GomP1=1;
echo $Grafica[$autoP1][0]."<BR>";
}
echo "&nbsp;&nbsp;GOMME&nbsp;&nbsp;<BR>";
if($CasCOM==10)
echo $Grafica[$autoCOM][0]." ";
echo"</TD><TD bgcolor=green></TD>";
echo"<TD>";
if($CasP1==16)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;16&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==16)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==44)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==44)
echo $Grafica[$autoCOM][1]." ";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==43)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==43)
echo $Grafica[$autoCOM][1]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==9)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;09&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==9)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD bgcolor=green></TD>";
echo "<TD>";
if($CasP1==17)
{
$MotP1=1;
echo $Grafica[$autoP1][0]."<BR>";
}
echo "&nbsp;&nbsp;MOTORE&nbsp;&nbsp;<BR>";
if($CasCOM==17)
echo $Grafica[$autoCOM][0]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==8)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;08&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==8)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD bgcolor=green></TD>";
echo "<TD>";
if($CasP1==18)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;18&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==18)
echo $Grafica[$autoCOM][0]." ";
echo "</TD>";
echo "<TD>";
if($CasP1==19)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;19&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==19)
echo $Grafica[$autoCOM][0]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==7)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;07&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==7)
echo $Grafica[$autoCOM][0]." ";
echo "</TD>";
echo "</TD><TD bgcolor=green></TD>";
echo "</TD><TD bgcolor=green></TD>";
echo "<TD>";
if($CasP1==20)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;20&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==20)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==21)
{
if($KersP1!=2)
$KersP1=1;
echo $Grafica[$autoP1][0]."<BR>";
}
echo "&nbsp;&nbsp;KERS&nbsp;&nbsp;<BR>";
if($CasCOM==21)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==22)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;22&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==22)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==23)
{
$GomP1=1;
echo $Grafica[$autoP1][0]."<BR>";
}
echo "&nbsp;&nbsp;GOMME&nbsp;&nbsp;<BR>";
if($CasCOM==23)
echo $Grafica[$autoCOM][0]."<BR>";
echo "</TD><TD>";
if($CasP1==24)
echo $Grafica[$autoP1][0]." ";
echo "&nbsp;SCORCIATOIA&nbsp;<BR>";
if($CasCOM==24)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==25)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;25&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==25)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==26)
{
if($TestP1==0)
$TestP1=1;
echo $Grafica[$autoP1][0]."<BR>";
}
echo "&nbsp;TESTACODA&nbsp;<BR>";
if($CasCOM==26)
echo $Grafica[$autoCOM][0]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==6)
{
$KersP1=1;
echo $Grafica[$autoP1][0]."<BR>";
}
echo "&nbsp;&nbsp;KERS&nbsp;&nbsp;<BR>";
if($CasCOM==6)
echo $Grafica[$autoCOM][0]." ";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=orange>";
if($CasP1==100)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;SCORCIATOIA&nbsp;<BR>";
if($CasCOM==100)
echo $Grafica[$autoCOM][1]." ";
echo "</TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"<TD>";
if($CasP1==27)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;27&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==27)
echo $Grafica[$autoCOM][1]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==5)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;05&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==5)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==4)
{
$DRSP1=1;
echo $Grafica[$autoP1][1]."<BR>";
}
echo "&nbsp;&nbsp;DRS END&nbsp;&nbsp;<BR>";
if($CasCOM==4)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==3)
{
$DRSP1=1;
echo $Grafica[$autoP1][1]."<BR>";
}
echo "&nbsp;&nbsp;&nbsp;03&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==3)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==2)
{
$DRSP1=1;
echo $Grafica[$autoP1][1]."<BR>";
}
echo "&nbsp;&nbsp;&nbsp;02&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==2)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==1)
{
$DRSP1=1;
echo $Grafica[$autoP1][1]."<BR>";
}
echo "&nbsp;&nbsp;&nbsp;01&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==1)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==0)
{
$DRSP1=1;
echo $Grafica[$autoP1][1]."<BR>";
}
echo "&nbsp;&nbsp;&nbsp;VIA!&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==0)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==31)
{
$DRSP1=1;
echo $Grafica[$autoP1][1]."<BR>";
}
echo "&nbsp;&nbsp;&nbsp;31&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==31)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==30)
{
$DRSP1=1;
echo $Grafica[$autoP1][1]."<BR>";
}
echo "&nbsp;&nbsp;&nbsp;30&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==30)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==29)
{
$DRSP1=1;
echo $Grafica[$autoP1][1]."<BR>";
}
echo "&nbsp;&nbsp;DRS ZONE&nbsp;&nbsp;<BR>";
if($CasCOM==29)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==28)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;28&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==28)
echo $Grafica[$autoCOM][1]." ";
echo "</TD></TR></TABLE><BR>";
//Scelta per il Kers
if ($KersP1==1)
{
                echo "Vuoi usare il Kers in questo turno?<BR>
                Si <INPUT type=radio name=SceKers Value=0 checked><BR>
                No <INPUT type=radio name=SceKers Value=1><BR>";
}
else
{
                echo "<INPUT type=hidden name=SceKers value=1>";
}
//Fine salta il turno per testacoda
if($K==1)
{
                $TestP1=0;
}
//Invio Dati in hidden
echo "<INPUT type=hidden name=pag value=3>
                       <INPUT type=hidden name=CasellaP1 value=$CasP1>
                       <INPUT type=hidden name=CasellaCOM value=$CasCOM>
                       <INPUT type=hidden name=FreniP1 value=$FreniP1>
                       <INPUT type=hidden name=FreniCOM value=$FreniCOM>
                       <INPUT type=hidden name=MotoreP1 value=$MotP1>
                       <INPUT type=hidden name=MotoreCOM value=$MotCOM>
                       <INPUT type=hidden name=GommeP1 value=$GomP1>
                       <INPUT type=hidden name=GommeCOM value=$GomCOM>
                       <INPUT type=hidden name=LapP1 value=$LapP1>
                       <INPUT type=hidden name=LapCOM value=$LapCOM>
                       <INPUT type=hidden name=KersP1 value=$KersP1>
                       <INPUT type=hidden name=KersCOM value=$KersCOM>
                       <INPUT type=hidden name=DRSP1 value=$DRSP1>
                       <INPUT type=hidden name=DRSCOM value=$DRSCOM>      
                       <INPUT type=hidden name=TestP1 value=$TestP1>
                       <INPUT type=hidden name=TestCOM value=$TestCOM>
                       <INPUT type=hidden name=autoP1 value=$autoP1>
                       <INPUT type=hidden name=autoCOM value=$autoCOM>
                                  <INPUT type=submit value='Guarda il turno del tuo avversario!'><BR>";
}
elseif($pag==3)
{
//Avversario: L'avversario è il computer e ha comandi molto simili a
//quelli del giocatore, cambia solo il Kers che non viene scelto,
//ma viene usato sempre se può esere usato.
$autoCOM=$_POST["autoCOM"];
if($TestCOM==0)
{
do
{
$DadoCOM=rand(1,7);
}while($DadoCOM==1);
$DadoCOM=$DadoCOM-1;
echo "Il tuo avversario ha fatto $DadoCOM!";
if (($GomCOM==1)&&($DadoCOM!=1)&&($MotCOM==0))
{
$DadoCOM = $DadoCOM - 1;
}
if (($MotCOM==1)&&($DadoCOM!=1))
{
                if($DadoCOM==2)
                $DadoCOM=1;
                else
                $DadoCOM=$DadoCOM-2;
               
}
if(($DRSCOM==1)&&($MotCOM==0)&&($GomCOM==0)&&($FreniCOM==0)&&($LapCOM>1))
{
$DadoCOM++;
$DRSCOM=0;
}
if($KersCOM==1)
{
$DadoCOM=$DadoCOM+2;
$KersCOM=2;
}
if((($CasCOM==($CasP1-1))&&($CasCOM!=24))||(($CasP1==0)&&($CasCOM==31))&&($LapCOM>0))
{
                $DadoCOM=$DadoCOM+1;
}
if(($CasCOM==9)&&($FreniCOM==1)&&($DadoCOM>=6))
{
                $CasCOM=$CasCOM+25;
}
elseif(($CasP1==10)&&($FreniP1==1)&&($DadoCOM>=5))
{
                $CasCOM=$CasCOM+25;
}
elseif(($CasCOM==11)&&($FreniCOM==1)&&($DadoCOM>=4))
{
                $CasCOM=$CasCOM+25;
}
elseif(($CasCOM==12)&&($FreniCOM==1)&&($DadoCOM>=3))
{
                $CasCOM=$CasCOM+25;
}
elseif(($CasCOM==13)&&($FreniCOM==1)&&($DadoCOM>=2))
{
                $CasCOM=$CasCOM+25;
}
elseif(($CasCOM==14)&&($DadoCOM<6))
{
                $FreniCOM=1;
                $CasCOM=$CasCOM+25;
}
elseif(($CasCOM==14)&&($DadoCOM==6))
{
                $FreniCOM=1;
                $CasCOM=$CasCOM-4;
}
elseif(($CasCOM==40)&&($DadoCOM>=5))
{
                $CasCOM=$CasCOM-29;
}
elseif(($CasCOM==41)&&($DadoCOM>=4))
{
                $CasCOM=$CasCOM-29;
}
elseif(($CasCOM==42)&&($DadoCOM>=3))
{
                $CasP1=$CasP1-29;
}
elseif(($CasCOM==43)&&($DadoCOM>=2))
{
                $CasCOM=$CasCOM-29;
}
elseif($CasCOM==44)
{
                $CasCOM=$CasCOM-29;
}
elseif(($CasCOM==24)&&($DadoCOM==1))
{
                $CasCOM=99;
}
elseif(($CasCOM==24)&&($DadoCOM!=1))
{
                $CasCOM=$CasCOM+4;
}
elseif($CasCOM==100)
{
                $CasCOM=29;
}
$CasCOM=$CasCOM + $DadoCOM;
if(($CasCOM>=32)&&($CasCOM<40))
{
                $CasCOM=$CasCOM-32;
                $KersCOM=0;
                $GomCOM=0;
                $MotCOM=0;
                $LapCOM++;
}
echo "Il tuo avversario si muove di $DadoCOM!<BR>";
$K=0;
}
else
{
                $K=1;
                echo "Il tuo avversario &egrave; in testacoda! Star&agrave; fermo questo turno!";
}
echo "<TABLE border=1><TR>";
echo"<TD>";
if($CasP1==12)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;TESTACODA!!!&nbsp;<BR>";
if($CasCOM==12)
{
if($TestCOM==0)
$TestCOM=1;
echo $Grafica[$autoCOM][0]." ";
}
echo"</TD>";
echo"<TD>";
if($CasP1==13)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;13&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==13)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD>";
if($CasP1==14)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;FRENI&nbsp;&nbsp;<BR>";
if($CasCOM==14)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==40)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==40)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==41)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==41)
echo $Grafica[$autoCOM][0]." ";
echo"</TD></TR><TR><TD>";
if($CasP1==11)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;11&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==11)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=green>";
echo"</TD>";
echo"<TD>";
if($CasP1==15)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;15&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==15)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=green>";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==42)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==42)
echo $Grafica[$autoCOM][1]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==10)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;GOMME&nbsp;&nbsp;<BR>";
if($CasCOM==10)
{
$GomCOM=1;
echo $Grafica[$autoCOM][0]." ";
}
echo"</TD><TD bgcolor=green></TD>";
echo"<TD>";
if($CasP1==16)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;16&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==16)
echo $Grafica[$autoCOM][0]." ";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==44)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==44)
echo $Grafica[$autoCOM][1]." ";
echo"</TD>";
echo"<TD bgcolor=yellow>";
if($CasP1==43)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VDF&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==43)
echo $Grafica[$autoCOM][1]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==9)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;09&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==9)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD bgcolor=green></TD>";
echo "<TD>";
if($CasP1==17)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;MOTORE&nbsp;&nbsp;<BR>";
if($CasCOM==17)
{
$MotCOM=1;
echo $Grafica[$autoCOM][0]." ";
}
echo "</TD></TR><TR><TD>";
if($CasP1==8)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;08&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==8)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD bgcolor=green></TD>";
echo "<TD>";
if($CasP1==18)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;18&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==18)
echo $Grafica[$autoCOM][0]." ";
echo "</TD>";
echo "<TD>";
if($CasP1==19)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;19&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==19)
echo $Grafica[$autoCOM][0]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==7)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;07&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==7)
echo $Grafica[$autoCOM][0]." ";
echo "</TD>";
echo "</TD><TD bgcolor=green></TD>";
echo "</TD><TD bgcolor=green></TD>";
echo "<TD>";
if($CasP1==20)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;20&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==20)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==21)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;KERS&nbsp;&nbsp;<BR>";
if($CasCOM==21)
{
$KersCOM=1;
echo $Grafica[$autoCOM][0]." ";
}
echo "</TD><TD>";
if($CasP1==22)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;22&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==22)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==23)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;GOMME&nbsp;&nbsp;<BR>";
if($CasCOM==23)
{
$GomCOM=1;
echo $Grafica[$autoCOM][0]." ";
}
echo "</TD><TD>";
if($CasP1==24)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;SCORCIATOIA&nbsp;<BR>";
if($CasCOM==24)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==25)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;&nbsp;25&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==25)
echo $Grafica[$autoCOM][0]." ";
echo "</TD><TD>";
if($CasP1==26)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;TESTACODA&nbsp;<BR>";
if($CasCOM==26)
{
if($TestCOM==0)
$TestCOM=1;
echo $Grafica[$autoCOM][0]." ";
}
echo "</TD></TR><TR><TD>";
if($CasP1==6)
echo $Grafica[$autoP1][0]."<BR>";
echo "&nbsp;&nbsp;KERS&nbsp;&nbsp;<BR>";
if($CasCOM==6)
{
$KersCOM=1;
echo $Grafica[$autoCOM][0]." ";
}
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"</TD><TD bgcolor=orange>";
if($CasP1==100)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;SCORCIATOIA&nbsp;<BR>";
if($CasCOM==100)
echo $Grafica[$autoCOM][1]." ";
echo "</TD>";
echo"</TD><TD bgcolor=green></TD>";
echo"<TD>";
if($CasP1==27)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;27&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==27)
echo $Grafica[$autoCOM][1]." ";
echo "</TD></TR><TR><TD>";
if($CasP1==5)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;05&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==5)
echo $Grafica[$autoCOM][1]." ";
echo "</TD><TD>";
if($CasP1==4)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;DRS END&nbsp;&nbsp;<BR>";
if($CasCOM==4)
{
$DRSCOM=1;
echo $Grafica[$autoCOM][1]." ";
}
echo "</TD><TD>";
if($CasP1==3)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;03&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==3)
{
$DRSCOM=1;
echo $Grafica[$autoCOM][1]." ";
}
echo "</TD><TD>";
if($CasP1==2)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;02&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==2)
{
$DRSCOM=1;
echo $Grafica[$autoCOM][1]." ";
}
echo "</TD><TD>";
if($CasP1==1)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;01&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==1)
{
$DRSCOM=1;
echo $Grafica[$autoCOM][1]." ";
}
echo "</TD><TD>";
if($CasP1==0)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;VIA!&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==0)
{
$DRSCOM=1;
echo $Grafica[$autoCOM][1]." ";
}
echo "</TD><TD>";
if($CasP1==31)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;31&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==31)
{
$DRSCOM=1;
echo $Grafica[$autoCOM][1]." ";
}
echo "</TD><TD>";
if($CasP1==30)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;30&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==30)
{
$DRSCOM=1;
echo $Grafica[$autoCOM][1]." ";
}
echo "</TD><TD>";
if($CasP1==29)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;DRS ZONE&nbsp;&nbsp;<BR>";
if($CasCOM==29)
{
$DRSCOM=1;
echo $Grafica[$autoCOM][1]." ";
}
echo "</TD><TD>";
if($CasP1==28)
echo $Grafica[$autoP1][1]."<BR>";
echo "&nbsp;&nbsp;&nbsp;28&nbsp;&nbsp;&nbsp;<BR>";
if($CasCOM==28)
echo $Grafica[$autoCOM][1]." ";
if($K==1)
{
                $TestCOM=0;
}
echo "</TD></TR></TABLE><BR><INPUT type=hidden name=pag value=2>
                       <INPUT type=hidden name=CasellaP1 value=$CasP1>
                       <INPUT type=hidden name=CasellaCOM value=$CasCOM>
                       <INPUT type=hidden name=FreniP1 value=$FreniP1>
                       <INPUT type=hidden name=FreniCOM value=$FreniCOM>
                       <INPUT type=hidden name=MotoreP1 value=$MotP1>
                       <INPUT type=hidden name=MotoreCOM value=$MotCOM>
                       <INPUT type=hidden name=GommeP1 value=$GomP1>
                       <INPUT type=hidden name=GommeCOM value=$GomCOM>
                       <INPUT type=hidden name=LapP1 value=$LapP1>
                       <INPUT type=hidden name=LapCOM value=$LapCOM>
                       <INPUT type=hidden name=KersP1 value=$KersP1>
                       <INPUT type=hidden name=KersCOM value=$KersCOM>
                       <INPUT type=hidden name=DRSP1 value=$DRSP1>
                       <INPUT type=hidden name=DRSCOM value=$DRSCOM>      
                       <INPUT type=hidden name=TestP1 value=$TestP1>
                       <INPUT type=hidden name=TestCOM value=$TestCOM>
                       <INPUT type=hidden name=autoP1 value=$autoP1>
                       <INPUT type=hidden name=autoCOM value=$autoCOM>
                       <INPUT type=hidden name=SceKers value=$SceKers>
                                  <INPUT type=submit value='Lancia il dado!'><BR>";
}
}
}
?>
        </FORM>
                </BODY>
</HTML>
 
