import {createContext, useContext, useState} from "react";

const page = createContext({
  status: "empty"
});

const PageProvider = props => {
  const [position, setPosition] = useState("");

  return (<>
    <page.Provider value={{position, setPosition}}>
      {props.children}
    </page.Provider>
  </>);
};


export {page};
export default PageProvider;