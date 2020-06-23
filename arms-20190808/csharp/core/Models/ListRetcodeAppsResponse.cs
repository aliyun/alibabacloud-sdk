// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class ListRetcodeAppsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RetcodeApps")]
        [Validation(Required=true)]
        public List<ListRetcodeAppsResponseRetcodeApps> RetcodeApps { get; set; }
        public class ListRetcodeAppsResponseRetcodeApps : TeaModel {
            [NameInMap("AppId")]
            [Validation(Required=true)]
            public long AppId { get; set; }

            [NameInMap("Pid")]
            [Validation(Required=true)]
            public string Pid { get; set; }

            [NameInMap("AppName")]
            [Validation(Required=true)]
            public string AppName { get; set; }

        }

    }

}
