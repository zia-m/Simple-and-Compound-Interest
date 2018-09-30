function nthroot(number, root)
   {
	  // Check negative number
    var negative = number / root;
    if((negative == 1) || number < 0)
      number = -number;
   
    var nr = (number ** (1 / root));
        root = (nr ** root);
  
  if(number > root) {
	  if((number - root) < 1 && (number > 0 === root > 0))
      return nr; 
  } else {
	  if((root - number) < 1 && (number > 0 === root > 0))
	    return nr;
  }
}
console.log(nthroot(43046721, 2));
console.log(nthroot(81, 4)); 




















