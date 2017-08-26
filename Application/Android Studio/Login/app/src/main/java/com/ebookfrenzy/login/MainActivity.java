package com.ebookfrenzy.login;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;
import android.content.Intent;

public class MainActivity extends AppCompatActivity {
    Button login;
    EditText username, password;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.activity_main);

        login=(Button)findViewById(R.id.button2);

        username=(EditText)findViewById(R.id.editText3);

        password=(EditText)findViewById(R.id.editText4);

        login.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                login();
            }
        });
    }
    public void login()
    {

        String user=username.getText().toString().trim();
        String pass=password.getText().toString().trim();

        if(user.equals("admin")&& pass.equals("admin"))
        {
            Toast.makeText(this, "Successfully logged in!",Toast.LENGTH_LONG).show();
            Intent intent = new Intent(MainActivity.this, AfterloginActivity.class);
            startActivity(intent);
        }
        else {
            Toast.makeText(this, "Invalid credentials",Toast.LENGTH_LONG).show();
        }

    }
}