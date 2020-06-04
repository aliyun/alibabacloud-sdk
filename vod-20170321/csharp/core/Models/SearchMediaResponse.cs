// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SearchMediaResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ScrollToken")]
        [Validation(Required=true)]
        public string ScrollToken { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public long Total { get; set; }

        [NameInMap("MediaList")]
        [Validation(Required=true)]
        public List<SearchMediaResponseMediaList> MediaList { get; set; }
        public class SearchMediaResponseMediaList : TeaModel {
            [NameInMap("MediaType")]
            [Validation(Required=true)]
            public string MediaType { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("MediaId")]
            [Validation(Required=true)]
            public string MediaId { get; set; }

            [NameInMap("Video")]
            [Validation(Required=true)]
            public SearchMediaResponseMediaListVideo Video { get; set; }
            public class SearchMediaResponseMediaListVideo : TeaModel {
                [NameInMap("VideoId")]
                [Validation(Required=true)]
                public string VideoId { get; set; }
                [NameInMap("MediaSource")]
                [Validation(Required=true)]
                public string MediaSource { get; set; }
                [NameInMap("MediaType")]
                [Validation(Required=true)]
                public string MediaType { get; set; }
                [NameInMap("Title")]
                [Validation(Required=true)]
                public string Title { get; set; }
                [NameInMap("Tags")]
                [Validation(Required=true)]
                public string Tags { get; set; }
                [NameInMap("Status")]
                [Validation(Required=true)]
                public string Status { get; set; }
                [NameInMap("Size")]
                [Validation(Required=true)]
                public long Size { get; set; }
                [NameInMap("Duration")]
                [Validation(Required=true)]
                public float? Duration { get; set; }
                [NameInMap("Description")]
                [Validation(Required=true)]
                public string Description { get; set; }
                [NameInMap("ModificationTime")]
                [Validation(Required=true)]
                public string ModificationTime { get; set; }
                [NameInMap("CreationTime")]
                [Validation(Required=true)]
                public string CreationTime { get; set; }
                [NameInMap("CoverURL")]
                [Validation(Required=true)]
                public string CoverURL { get; set; }
                [NameInMap("CateId")]
                [Validation(Required=true)]
                public long CateId { get; set; }
                [NameInMap("CateName")]
                [Validation(Required=true)]
                public string CateName { get; set; }
                [NameInMap("DownloadSwitch")]
                [Validation(Required=true)]
                public string DownloadSwitch { get; set; }
                [NameInMap("PreprocessStatus")]
                [Validation(Required=true)]
                public string PreprocessStatus { get; set; }
                [NameInMap("StorageLocation")]
                [Validation(Required=true)]
                public string StorageLocation { get; set; }
                [NameInMap("RegionId")]
                [Validation(Required=true)]
                public string RegionId { get; set; }
                [NameInMap("TranscodeMode")]
                [Validation(Required=true)]
                public string TranscodeMode { get; set; }
                [NameInMap("AuditStatus")]
                [Validation(Required=true)]
                public string AuditStatus { get; set; }
                [NameInMap("AuditAIStatus")]
                [Validation(Required=true)]
                public string AuditAIStatus { get; set; }
                [NameInMap("AuditManualStatus")]
                [Validation(Required=true)]
                public string AuditManualStatus { get; set; }
                [NameInMap("AuditAIResult")]
                [Validation(Required=true)]
                public string AuditAIResult { get; set; }
                [NameInMap("AuditTemplateId")]
                [Validation(Required=true)]
                public string AuditTemplateId { get; set; }
                [NameInMap("CustomMediaInfo")]
                [Validation(Required=true)]
                public string CustomMediaInfo { get; set; }
                [NameInMap("AppId")]
                [Validation(Required=true)]
                public string AppId { get; set; }
                [NameInMap("Snapshots")]
                [Validation(Required=true)]
                public List<string> Snapshots { get; set; }
                [NameInMap("SpriteSnapshots")]
                [Validation(Required=true)]
                public List<string> SpriteSnapshots { get; set; }
            };

            [NameInMap("Audio")]
            [Validation(Required=true)]
            public SearchMediaResponseMediaListAudio Audio { get; set; }
            public class SearchMediaResponseMediaListAudio : TeaModel {
                [NameInMap("AudioId")]
                [Validation(Required=true)]
                public string AudioId { get; set; }
                [NameInMap("MediaSource")]
                [Validation(Required=true)]
                public string MediaSource { get; set; }
                [NameInMap("Title")]
                [Validation(Required=true)]
                public string Title { get; set; }
                [NameInMap("Tags")]
                [Validation(Required=true)]
                public string Tags { get; set; }
                [NameInMap("Status")]
                [Validation(Required=true)]
                public string Status { get; set; }
                [NameInMap("Size")]
                [Validation(Required=true)]
                public long Size { get; set; }
                [NameInMap("Duration")]
                [Validation(Required=true)]
                public float? Duration { get; set; }
                [NameInMap("Description")]
                [Validation(Required=true)]
                public string Description { get; set; }
                [NameInMap("ModificationTime")]
                [Validation(Required=true)]
                public string ModificationTime { get; set; }
                [NameInMap("CreationTime")]
                [Validation(Required=true)]
                public string CreationTime { get; set; }
                [NameInMap("CoverURL")]
                [Validation(Required=true)]
                public string CoverURL { get; set; }
                [NameInMap("CateId")]
                [Validation(Required=true)]
                public long CateId { get; set; }
                [NameInMap("CateName")]
                [Validation(Required=true)]
                public string CateName { get; set; }
                [NameInMap("DownloadSwitch")]
                [Validation(Required=true)]
                public string DownloadSwitch { get; set; }
                [NameInMap("PreprocessStatus")]
                [Validation(Required=true)]
                public string PreprocessStatus { get; set; }
                [NameInMap("StorageLocation")]
                [Validation(Required=true)]
                public string StorageLocation { get; set; }
                [NameInMap("RegionId")]
                [Validation(Required=true)]
                public string RegionId { get; set; }
                [NameInMap("TranscodeMode")]
                [Validation(Required=true)]
                public string TranscodeMode { get; set; }
                [NameInMap("AuditStatus")]
                [Validation(Required=true)]
                public string AuditStatus { get; set; }
                [NameInMap("AuditAIStatus")]
                [Validation(Required=true)]
                public string AuditAIStatus { get; set; }
                [NameInMap("AuditManualStatus")]
                [Validation(Required=true)]
                public string AuditManualStatus { get; set; }
                [NameInMap("AuditAIResult")]
                [Validation(Required=true)]
                public string AuditAIResult { get; set; }
                [NameInMap("AuditTemplateId")]
                [Validation(Required=true)]
                public string AuditTemplateId { get; set; }
                [NameInMap("CustomMediaInfo")]
                [Validation(Required=true)]
                public string CustomMediaInfo { get; set; }
                [NameInMap("AppId")]
                [Validation(Required=true)]
                public string AppId { get; set; }
                [NameInMap("Snapshots")]
                [Validation(Required=true)]
                public List<string> Snapshots { get; set; }
                [NameInMap("SpriteSnapshots")]
                [Validation(Required=true)]
                public List<string> SpriteSnapshots { get; set; }
            };

            [NameInMap("Image")]
            [Validation(Required=true)]
            public SearchMediaResponseMediaListImage Image { get; set; }
            public class SearchMediaResponseMediaListImage : TeaModel {
                [NameInMap("Title")]
                [Validation(Required=true)]
                public string Title { get; set; }
                [NameInMap("ImageId")]
                [Validation(Required=true)]
                public string ImageId { get; set; }
                [NameInMap("CateId")]
                [Validation(Required=true)]
                public long CateId { get; set; }
                [NameInMap("CateName")]
                [Validation(Required=true)]
                public string CateName { get; set; }
                [NameInMap("Ext")]
                [Validation(Required=true)]
                public string Ext { get; set; }
                [NameInMap("CreationTime")]
                [Validation(Required=true)]
                public string CreationTime { get; set; }
                [NameInMap("ModificationTime")]
                [Validation(Required=true)]
                public string ModificationTime { get; set; }
                [NameInMap("Tags")]
                [Validation(Required=true)]
                public string Tags { get; set; }
                [NameInMap("Type")]
                [Validation(Required=true)]
                public string Type { get; set; }
                [NameInMap("URL")]
                [Validation(Required=true)]
                public string URL { get; set; }
                [NameInMap("Status")]
                [Validation(Required=true)]
                public string Status { get; set; }
                [NameInMap("Description")]
                [Validation(Required=true)]
                public string Description { get; set; }
                [NameInMap("StorageLocation")]
                [Validation(Required=true)]
                public string StorageLocation { get; set; }
                [NameInMap("RegionId")]
                [Validation(Required=true)]
                public string RegionId { get; set; }
                [NameInMap("AppId")]
                [Validation(Required=true)]
                public string AppId { get; set; }
            };

            [NameInMap("AttachedMedia")]
            [Validation(Required=true)]
            public SearchMediaResponseMediaListAttachedMedia AttachedMedia { get; set; }
            public class SearchMediaResponseMediaListAttachedMedia : TeaModel {
                [NameInMap("Title")]
                [Validation(Required=true)]
                public string Title { get; set; }
                [NameInMap("MediaId")]
                [Validation(Required=true)]
                public string MediaId { get; set; }
                [NameInMap("Ext")]
                [Validation(Required=true)]
                public string Ext { get; set; }
                [NameInMap("CreationTime")]
                [Validation(Required=true)]
                public string CreationTime { get; set; }
                [NameInMap("ModificationTime")]
                [Validation(Required=true)]
                public string ModificationTime { get; set; }
                [NameInMap("Tags")]
                [Validation(Required=true)]
                public string Tags { get; set; }
                [NameInMap("BusinessType")]
                [Validation(Required=true)]
                public string BusinessType { get; set; }
                [NameInMap("URL")]
                [Validation(Required=true)]
                public string URL { get; set; }
                [NameInMap("Status")]
                [Validation(Required=true)]
                public string Status { get; set; }
                [NameInMap("Description")]
                [Validation(Required=true)]
                public string Description { get; set; }
                [NameInMap("StorageLocation")]
                [Validation(Required=true)]
                public string StorageLocation { get; set; }
                [NameInMap("RegionId")]
                [Validation(Required=true)]
                public string RegionId { get; set; }
                [NameInMap("AppId")]
                [Validation(Required=true)]
                public string AppId { get; set; }
                [NameInMap("Icon")]
                [Validation(Required=true)]
                public string Icon { get; set; }
                [NameInMap("OnlineStatus")]
                [Validation(Required=true)]
                public string OnlineStatus { get; set; }
                [NameInMap("Categories")]
                [Validation(Required=true)]
                public List<SearchMediaResponseMediaListAttachedMediaCategories> Categories { get; set; }
                public class SearchMediaResponseMediaListAttachedMediaCategories : TeaModel {
                        public long CateId { get; set; }
                        public string CateName { get; set; }
                        public long Level { get; set; }
                        public long ParentId { get; set; }
                }
            };

        }

    }

}
