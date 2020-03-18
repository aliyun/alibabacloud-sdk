// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class Config : TeaModel {
        [NameInMap("accessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("accessKeySecret")]
        [Validation(Required=false)]
        public string AccessKeySecret { get; set; }

        [NameInMap("type")]
        [Validation(Required=false)]
        public string Type { get; set; }

        [NameInMap("securityToken")]
        [Validation(Required=false)]
        public string SecurityToken { get; set; }

        [NameInMap("endpoint")]
        [Validation(Required=true)]
        public string Endpoint { get; set; }

        [NameInMap("protocol")]
        [Validation(Required=false)]
        public string Protocol { get; set; }

        [NameInMap("regionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("read timeout")]
        [Validation(Required=false)]
        public int? ReadTimeout { get; set; }

        [NameInMap("connect timeout")]
        [Validation(Required=false)]
        public int? ConnectTimeout { get; set; }

        [NameInMap("http proxy")]
        [Validation(Required=false)]
        public string HttpProxy { get; set; }

        [NameInMap("https proxy")]
        [Validation(Required=false)]
        public string HttpsProxy { get; set; }

        [NameInMap("socks5 proxy")]
        [Validation(Required=false)]
        public string Socks5Proxy { get; set; }

        [NameInMap("socks5 NetWork")]
        [Validation(Required=false)]
        public string Socks5NetWork { get; set; }

        [NameInMap("no proxy")]
        [Validation(Required=false)]
        public string NoProxy { get; set; }

        [NameInMap("userAgent")]
        [Validation(Required=false)]
        public string UserAgent { get; set; }

        [NameInMap("maxIdleConns")]
        [Validation(Required=false)]
        public int? MaxIdleConns { get; set; }

    }

}
