import java.util.*;

class DiwaliLight
{
	public static void main(String [] args)
	{
         int t,r,b,g,R=0,G=0,B=0;
	     String op="";
	  
	     Scanner scan = new Scanner(System.in);
	  
	     System.out.print("\n ENTER TIME INTERVAL : ");
	     t= scan.nextInt();
	  
	     System.out.print("\n ENTER TIME INTERVAL OF RED ,GREEN & BLUE : ");
	     r= scan.nextInt();
	     g= scan.nextInt();
	     b= scan.nextInt();

          R=t/r;
		  if(R%2==0)
		     R=0;
		  else
		     R=1;
			 
		  G=t/g;
		  if(G%2==0)
		     G=0;
		  else
		     G=1;
			 
		  B=t/b;
		  if(B%2==0)
		     B=0;
		  else
		     B=1;
		     
	     op = op+R+G+B;
	  
	     switch(op)
	     {
	          case "000" : System.out.print("\n BLACK");
		                break;
		      case "100" : System.out.print("\n RED");
		                break;
		      case "010" : System.out.print("\n GREEN");
		                break;
		      case "001" : System.out.print("\n BLUE");
		                break;
		      case "110" : System.out.print("\n YELLOW");
		                break;
		      case "011" : System.out.print("\n CYAN");
		                break;
		      case "101" : System.out.print("\n MAGENTA");
		                break;
		      case "111" : System.out.print("\n WHITE");
		                break;
	     }
	}
}