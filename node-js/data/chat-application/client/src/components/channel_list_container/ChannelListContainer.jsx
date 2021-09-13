import React from "react";
// import Cookies from "universal-cookie";
import LogoutIcon from "../../assets/logout.png";
import HospitalIcon from "../../assets/hospital.png";
import { ChannelList } from "stream-chat-react";
import {
  ChannelSearch,
  TeamChannelList,
  TeamChannelPreview,
} from "../../components";

// const cookies = new Cookies();

const SideBar = ({ logout }) => (
  <div className="channel-list__sidebar">
    <div className="channel-list__sidebar__icon1">
      <div className="icon1__inner">
        <img src={HospitalIcon} alt="Hospital" width="30" />
      </div>
    </div>
    <div className="channel-list__sidebar__icon2">
      <div className="icon1__inner" onClick={logout}>
        <img src={LogoutIcon} alt="Logout" width="30" />
      </div>
    </div>
  </div>
);

const CompanyHeader = () => (
  <div className="channel-list__header">
    <p className="channel-list__header__text">Medical Pager</p>
  </div>
);

const ChannelListContainer = () => {
  return (
    <>
      <SideBar />
      <div className="channel-list__list__wrapper">
        <CompanyHeader />
        <ChannelSearch />
        <ChannelList
          filters={{}}
          channelRenderFilterFn={() => {}}
          List={(listProps) => <TeamChannelList {...listProps} type="team" />}
          Preview={(previewProps) => (
            <TeamChannelPreview {...previewProps} type="team" />
          )}
        />

        <ChannelList
          filters={{}}
          channelRenderFilterFn={() => {}}
          List={(listProps) => (
            <TeamChannelList {...listProps} type="nessaging" />
          )}
          Preview={(previewProps) => (
            <TeamChannelPreview {...previewProps} type="nessaging" />
          )}
        />
      </div>
    </>
  );
};

export default ChannelListContainer;
