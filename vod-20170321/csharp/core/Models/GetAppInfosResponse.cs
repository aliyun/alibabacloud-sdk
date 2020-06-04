// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetAppInfosResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AppInfoList")]
        [Validation(Required=true)]
        public List<GetAppInfosResponseAppInfoList> AppInfoList { get; set; }
        public class GetAppInfosResponseAppInfoList : TeaModel {
            [NameInMap("AppId")]
            [Validation(Required=true)]
            public string AppId { get; set; }

            [NameInMap("AppName")]
            [Validation(Required=true)]
            public string AppName { get; set; }

            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("ModificationTime")]
            [Validation(Required=true)]
            public string ModificationTime { get; set; }

        }

        [NameInMap("NonExistAppIds")]
        [Validation(Required=true)]
        public List<string> NonExistAppIds { get; set; }

    }

}
