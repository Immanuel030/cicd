import urllib.request

response = urllib.request.urlopen("http://localhost")
content = response.read().decode("utf-8")

assert "Hello CI/CD World" in content
print("TEST PASSED")
