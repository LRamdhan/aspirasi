import ReactDOM from 'react-dom/client'
import Landing from "./landing/Landing";
import Main from "./main/Main";
import PageProvider from './context/page';
import { useEffect } from 'react';
import { usePosition, useRequest } from './hook/customhook';

const Container = () => {
  const position = usePosition();
  const request = useRequest();

  useEffect(() => {
    request.get('/landing/checkLogout.php')
      .then(response => position.setPosition(response.data.status ? "landing" : "main"))
      .catch(error => console.log(error));
  }, []);

  if(position.position === "main") window.open(`${import.meta.env.VITE_rootURL}/page/aspirasi.php`, "_self");

  return (<>
    {position.position === "landing" && <Landing/>}
    {/* {position.position === "main" && <Main/>} */}
  </>);
};

ReactDOM.createRoot(document.getElementById('root')).render(<PageProvider>
  <Container/>
</PageProvider>);