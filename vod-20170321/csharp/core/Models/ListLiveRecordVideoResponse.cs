// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class ListLiveRecordVideoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("LiveRecordVideoList")]
        [Validation(Required=true)]
        public ListLiveRecordVideoResponseLiveRecordVideoList LiveRecordVideoList { get; set; }
        public class ListLiveRecordVideoResponseLiveRecordVideoList : TeaModel {
            [NameInMap("LiveRecordVideo")]
            [Validation(Required=true)]
            public List<ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo> LiveRecordVideo { get; set; }
            public class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo : TeaModel {
                    public string StreamName { get; set; }
                    public string DomainName { get; set; }
                    public string AppName { get; set; }
                    public string PlaylistId { get; set; }
                    public string RecordStartTime { get; set; }
                    public string RecordEndTime { get; set; }
                    public ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList PlayInfoList { get; set; }
                    public class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList : TeaModel {
                        [NameInMap("PlayInfo")]
                        [Validation(Required=true)]
                        public List<ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo> PlayInfo { get; set; }
                        public class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo : TeaModel {
                            [NameInMap("Width")]
                            [Validation(Required=true)]
                            public long Width { get; set; }

                            [NameInMap("Height")]
                            [Validation(Required=true)]
                            public long Height { get; set; }

                            [NameInMap("Size")]
                            [Validation(Required=true)]
                            public long Size { get; set; }

                            [NameInMap("PlayURL")]
                            [Validation(Required=true)]
                            public string PlayURL { get; set; }

                            [NameInMap("Bitrate")]
                            [Validation(Required=true)]
                            public string Bitrate { get; set; }

                            [NameInMap("Definition")]
                            [Validation(Required=true)]
                            public string Definition { get; set; }

                            [NameInMap("Duration")]
                            [Validation(Required=true)]
                            public string Duration { get; set; }

                            [NameInMap("Format")]
                            [Validation(Required=true)]
                            public string Format { get; set; }

                            [NameInMap("Fps")]
                            [Validation(Required=true)]
                            public string Fps { get; set; }

                            [NameInMap("Encrypt")]
                            [Validation(Required=true)]
                            public long Encrypt { get; set; }

                            [NameInMap("Plaintext")]
                            [Validation(Required=true)]
                            public string Plaintext { get; set; }

                            [NameInMap("Complexity")]
                            [Validation(Required=true)]
                            public string Complexity { get; set; }

                            [NameInMap("StreamType")]
                            [Validation(Required=true)]
                            public string StreamType { get; set; }

                            [NameInMap("Rand")]
                            [Validation(Required=true)]
                            public string Rand { get; set; }

                            [NameInMap("JobId")]
                            [Validation(Required=true)]
                            public string JobId { get; set; }

                        }

                    }
                    public ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo Video { get; set; }
                    public class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo : TeaModel {
                        [NameInMap("VideoId")]
                        [Validation(Required=true)]
                        public string VideoId { get; set; }

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

                        [NameInMap("Privilege")]
                        [Validation(Required=true)]
                        public int? Privilege { get; set; }

                        [NameInMap("Duration")]
                        [Validation(Required=true)]
                        public float? Duration { get; set; }

                        [NameInMap("Description")]
                        [Validation(Required=true)]
                        public string Description { get; set; }

                        [NameInMap("CustomerId")]
                        [Validation(Required=true)]
                        public long CustomerId { get; set; }

                        [NameInMap("CreateTime")]
                        [Validation(Required=true)]
                        public string CreateTime { get; set; }

                        [NameInMap("CreationTime")]
                        [Validation(Required=true)]
                        public string CreationTime { get; set; }

                        [NameInMap("ModifyTime")]
                        [Validation(Required=true)]
                        public string ModifyTime { get; set; }

                        [NameInMap("CoverURL")]
                        [Validation(Required=true)]
                        public string CoverURL { get; set; }

                        [NameInMap("CateId")]
                        [Validation(Required=true)]
                        public int? CateId { get; set; }

                        [NameInMap("CateName")]
                        [Validation(Required=true)]
                        public string CateName { get; set; }

                        [NameInMap("DownloadSwitch")]
                        [Validation(Required=true)]
                        public string DownloadSwitch { get; set; }

                        [NameInMap("TemplateGroupId")]
                        [Validation(Required=true)]
                        public string TemplateGroupId { get; set; }

                        [NameInMap("Snapshots")]
                        [Validation(Required=true)]
                        public ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots Snapshots { get; set; }
                        public class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots : TeaModel {
                            [NameInMap("Snapshot")]
                            [Validation(Required=true)]
                            public List<string> Snapshot { get; set; }
                        };

                    }
            }
        };

    }

}
