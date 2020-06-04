// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetAttachedMediaInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AttachedMediaList")]
        [Validation(Required=true)]
        public List<GetAttachedMediaInfoResponseAttachedMediaList> AttachedMediaList { get; set; }
        public class GetAttachedMediaInfoResponseAttachedMediaList : TeaModel {
            [NameInMap("MediaId")]
            [Validation(Required=true)]
            public string MediaId { get; set; }

            [NameInMap("Title")]
            [Validation(Required=true)]
            public string Title { get; set; }

            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }

            [NameInMap("Tags")]
            [Validation(Required=true)]
            public string Tags { get; set; }

            [NameInMap("URL")]
            [Validation(Required=true)]
            public string URL { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

            [NameInMap("FileSize")]
            [Validation(Required=true)]
            public long FileSize { get; set; }

            [NameInMap("StorageLocation")]
            [Validation(Required=true)]
            public string StorageLocation { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("ModificationTime")]
            [Validation(Required=true)]
            public string ModificationTime { get; set; }

            [NameInMap("AppId")]
            [Validation(Required=true)]
            public string AppId { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("OnlineStatus")]
            [Validation(Required=true)]
            public string OnlineStatus { get; set; }

            [NameInMap("Icon")]
            [Validation(Required=true)]
            public string Icon { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("Categories")]
            [Validation(Required=true)]
            public List<GetAttachedMediaInfoResponseAttachedMediaListCategories> Categories { get; set; }
            public class GetAttachedMediaInfoResponseAttachedMediaListCategories : TeaModel {
                [NameInMap("CateId")]
                [Validation(Required=true)]
                public long CateId { get; set; }

                [NameInMap("CateName")]
                [Validation(Required=true)]
                public string CateName { get; set; }

                [NameInMap("Level")]
                [Validation(Required=true)]
                public long Level { get; set; }

                [NameInMap("ParentId")]
                [Validation(Required=true)]
                public long ParentId { get; set; }

            }

        }

        [NameInMap("NonExistMediaIds")]
        [Validation(Required=true)]
        public List<string> NonExistMediaIds { get; set; }

    }

}
