// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imagerecog.Models
{
    public class Config : TeaModel {
        [NameInMap("accessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("accessKeySecret")]
        [Validation(Required=false)]
        public string AccessKeySecret { get; set; }

        [NameInMap("type")]
        [Validation(Required=true)]
        public string Type { get; set; }

        [NameInMap("securityToken")]
        [Validation(Required=true)]
        public string SecurityToken { get; set; }

        [NameInMap("endpoint")]
        [Validation(Required=true)]
        public string Endpoint { get; set; }

        [NameInMap("protocol")]
        [Validation(Required=true)]
        public string Protocol { get; set; }

        [NameInMap("regionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("userAgent")]
        [Validation(Required=true)]
        public string UserAgent { get; set; }

        [NameInMap("readTimeout")]
        [Validation(Required=true)]
        public int? ReadTimeout { get; set; }

        [NameInMap("connectTimeout")]
        [Validation(Required=true)]
        public int? ConnectTimeout { get; set; }

        [NameInMap("localAddr")]
        [Validation(Required=true)]
        public string LocalAddr { get; set; }

        [NameInMap("httpProxy")]
        [Validation(Required=true)]
        public string HttpProxy { get; set; }

        [NameInMap("httpsProxy")]
        [Validation(Required=true)]
        public string HttpsProxy { get; set; }

        [NameInMap("noProxy")]
        [Validation(Required=true)]
        public string NoProxy { get; set; }

        [NameInMap("socks5Proxy")]
        [Validation(Required=true)]
        public string Socks5Proxy { get; set; }

        [NameInMap("socks5NetWork")]
        [Validation(Required=true)]
        public string Socks5NetWork { get; set; }

        [NameInMap("maxIdleConns")]
        [Validation(Required=true)]
        public int? MaxIdleConns { get; set; }

        [NameInMap("endpointType")]
        [Validation(Required=true)]
        public string EndpointType { get; set; }

        [NameInMap("openPlatformEndpoint")]
        [Validation(Required=true)]
        public string OpenPlatformEndpoint { get; set; }

    }

}
