import java.util.*;

class GrayCode2
{
     public static void main(String [] args)
	 {
	       int ar[]=new int [4] ;
		   int n,x,b;
		   
		   Scanner scan = new Scanner(System.in);
		   System.out.print("\n\n ENTER A NUMBER :");
		   n=scan.nextInt();
		   
		   for(x=0;x<ar.length;x++)
		        ar[x]=0;
				
		   b=n;
		   for(x=ar.length-1;x>=0;x--)
		   {
		         ar[x]=b%2;
				 b=b/2;
				 
				 if(b==0)
				    break;
		   }
		   
		   System.out.print("\n\n BINARY OF GIVEN NUMBER  : ");
		   for(x=0;x<ar.length;x++)
		        System.out.print("  "+ar[x]);
		   
		   for(x=ar.length-1;x>0;x--)
		   {
		        if(ar[x]==ar[x-1])
				    ar[x]=0;
			    else
				   ar[x]=1;
		   }
		 			
           System.out.print("\n\n GRAY CODE  :");
		   for(x=0;x<ar.length;x++)
		        System.out.print("  "+ar[x]);
		 
	 }
}