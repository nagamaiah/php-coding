<?php
echo "<pre>";

// hash(
//     string $algo,
//     string $data,
//     bool $binary = false,
//     array $options = []
// ): string

// hash() -> generates a hash value (string);

// echo "md5 --> ".hash('md5','nagamaiah', false)."\n";
// echo "sha1 --> ".hash('sha1','nagamaiah', false)."\n";
// echo "sha256 --> ".hash('sha256','nagamaiah', false)."\n";
// echo "sha512 --> ".hash('sha512','nagamaiah', false)."\n";
// echo "whirlpool --> ".hash('whirlpool','nagamaiah', false)."\n";
// echo "sha512/224 --> ".hash('sha512/224','nagamaiah', false)."\n";
// echo "sha512/256 --> ".hash('sha512/256','nagamaiah', false)."\n";

// md5 --> 62d3e346b186f4f0927387ac12f5407e
// sha1 --> dcdeb18e70c75d15351107756c043460beeb593d
// sha256 --> aa1d4b183eab6c834fdca4d1cf9677eb07dadf1b03df34f8389627dd7c6bcaa7
// sha512 --> 55400187bd5367392158d99976a16e6cd7cd2e97c815618255c2cbd571e9bfb46d43669792d57968414a04c187006410d9e490e8d9761d17bff43cf6221699ca
// whirlpool --> 462ba25a679658788c2d916daa2b9a73dd90dd45beff445cbf08bf2e3e2679e53c01664a5f913801e7106e4e7212666c5a0245a2d6f8e3664332d061f671365c
// sha512/224 --> a2100ce5f1cda8b0b6265a7b4251ab39cdbbabf97828c03a5efe3443  
// sha512/256 --> 2e76c5271204cd918cf3c2959f7e6e451ef3b89640ac55451a27b843ebe29bb0



//hash_algos — Return a list of registered hashing algorithms
// print_r(hash_algos());


// echo "sha512 --> ".hash('sha512','Test1234', false)."\n";    //used in docsmit app
// echo "md5 --> ".hash('md5','Test1234', false)."\n";
// echo "sha1 --> ".hash('sha1','Test1234', false)."\n";
// echo "sha256 --> ".hash('sha256','Test1234', false)."\n";


// echo "sha256 --> ".hash('wrongalgooo','Test1234', false)."\n";  //Fatal error:  Uncaught ValueError:

// Error is the base class for all internal PHP errors.
try {
    echo hash('string','Test1234', false)."\n";  //Fatal error:  Uncaught ValueError:
} catch (\Error $e) { 
    print_r($e); // ValueError Object

}

try {
    // echo hash(null,'Test1234', false)."\n";  //Fatal error:  Uncaught ValueError:
    echo hash(true,'Test1234', false)."\n";  //Fatal error:  Uncaught ValueError:
} catch(\ValueError $e){
    // print_r($e); 
    // echo $e->getMessage();
    // echo $e->getFile()."::".$e->getLine();
    // print_r($e->getTrace());
    // echo $e->getTraceAsString();
    // echo get_class($e); // ValueError
    // echo $e::class; // ValueError
    // echo get_parent_class($e); //Error
    // var_dump(get_parent_class(Error::class)); //Error
    // Error is the base class for all internal PHP errors.

}



