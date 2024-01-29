package com.tasktool.restfulwebservices;

import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.GetMapping;


//Controller
@RestController
public class WelcomeMessage {
	// Get
	// URL -//welcome
	@GetMapping(path = "/welcome-message")
	public String welcomeMessage() {
		return "welcome test1";
	}
}
