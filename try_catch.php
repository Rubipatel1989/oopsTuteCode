<?php

function _modulename_getData($field, $table) {
    try {
      if (empty($field)) {
        throw new Exception("The field is undefined."); 
      }
      // rest of code here...
    }
    catch (Exception $e) {
      if (some condition) {
          // do some handling
      } else {
          // the error is irrecoverable
          throw $e;
      }
    }
  }

  catch (Exception $e) {
    $db->rollback(); // rollback the transaction
    throw $e; // let the error to be handled the usual way
  }
}