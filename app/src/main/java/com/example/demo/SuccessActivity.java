package com.example.demo;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class SuccessActivity extends Activity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.success_activity);
    }

    public void Goback (View v) {
        Intent intent = new Intent(SuccessActivity.this,MainActivity.class);
        startActivity(intent);
        SuccessActivity.this.finish();
    }
}
