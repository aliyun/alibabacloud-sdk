// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetEditingProjectResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Project")]
        [Validation(Required=true)]
        public GetEditingProjectResponseProject Project { get; set; }
        public class GetEditingProjectResponseProject : TeaModel {
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public string ProjectId { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("ModifiedTime")]
            [Validation(Required=true)]
            public string ModifiedTime { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("Title")]
            [Validation(Required=true)]
            public string Title { get; set; }
            [NameInMap("Timeline")]
            [Validation(Required=true)]
            public string Timeline { get; set; }
            [NameInMap("CoverURL")]
            [Validation(Required=true)]
            public string CoverURL { get; set; }
            [NameInMap("StorageLocation")]
            [Validation(Required=true)]
            public string StorageLocation { get; set; }
            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }
        };

    }

}
