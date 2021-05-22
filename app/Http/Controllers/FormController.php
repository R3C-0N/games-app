<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public static function inputError($idName, $errorSentence) {
        return "<script id='errorScript$idName'>" .
                    "document.querySelector('#$idName').classList.add('is-invalid');" .
                    "document.querySelector('#errorScript$idName').remove();".
                "</script>".
                "<div id='".$idName."Feedback' class='invalid-feedback'>".
                    $errorSentence.
                "</div>";
    }
}
