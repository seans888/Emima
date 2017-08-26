package com.ebookfrenzy.login;

import android.support.v7.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.Spinner;

public class AfterloginActivity extends AppCompatActivity{


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_afterlogin);

        Spinner mySpinner = (Spinner) findViewById(R.id.spinner1);

        ArrayAdapter<String> myAdapter = new ArrayAdapter<String>(AfterloginActivity.this,
                android.R.layout.simple_dropdown_item_1line, getResources().getStringArray(R.array.location));
                myAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
                mySpinner.setAdapter(myAdapter);
    }
}
