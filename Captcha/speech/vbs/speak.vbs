Dim msg,sapi
	msg=inputBox("Enter your text","Talk it")
	set sapi=CreateObject("sapi.spvoice")
	sapi.Speak msg